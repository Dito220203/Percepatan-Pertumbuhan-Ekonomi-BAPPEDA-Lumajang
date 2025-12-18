<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Monev;
use App\Models\Pengguna;
use App\Models\ProgresKerja;
use App\Models\RencanaAksi_6_tahun;
use App\Models\RencanaKerja;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DasboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->guard('pengguna')->user();

        if ($user->level == 'Super Admin') {
            $totalRencanaAksi = RencanaAksi_6_tahun::count();

            $totalrenja       = RencanaKerja::count();
            $renjaaktiv       = RencanaKerja::where('status', 'valid')->count();

            $totalmonev       = Monev::count();
            $monevaktiv       = Monev::where('status', 'valid')->count();

            $totalprogres     = ProgresKerja::count();
            $progresaktiv     = ProgresKerja::where('status', 'valid')->count();
        } else {
            $totalRencanaAksi = RencanaAksi_6_tahun::count();
            $totalrenja       = RencanaKerja::where('id_pengguna', $user->id)->count();
            $renjaaktiv       = RencanaKerja::where('id_pengguna', $user->id)
                ->where('status', 'valid')
                ->count();
            $totalmonev       = Monev::where('id_pengguna', $user->id)->count();
            $monevaktiv       = Monev::where('id_pengguna', $user->id)
                ->where('status', 'valid')
                ->count();
            $totalprogres     = ProgresKerja::where('id_pengguna', $user->id)->count();
            $progresaktiv     = ProgresKerja::where('id_pengguna', $user->id)
                ->where('status', 'valid')
                ->count();
        }
        // 🔹 ambil list tahun dari rencana_kerjas
        $listTahun = RencanaKerja::when($user->level != 'Super Admin', function ($q) use ($user) {
            $q->where('id_pengguna', $user->id);
        })
            ->select('tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');


        // 🔹 tahun aktif
        $tahunAktif = $request->tahun ?? $listTahun->first();

        // 🔹 progres kerja per bulan berdasarkan tahun renja
        $progresPerBulan = ProgresKerja::join('monevs', 'monevs.id', '=', 'progres_kerjas.id_monev')
            ->join('rencana_kerjas', 'rencana_kerjas.id', '=', 'monevs.id_renja')
            ->where('rencana_kerjas.tahun', $tahunAktif)
            ->when($user->level != 'Super Admin', function ($q) use ($user) {
                $q->where('rencana_kerjas.id_pengguna', $user->id);
            })
            ->selectRaw('MONTH(progres_kerjas.created_at) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();


        // 🔹 mapping bulan 1–12
        $dataChart = array_fill(1, 12, 0);
        foreach ($progresPerBulan as $row) {
            $dataChart[$row->bulan] = $row->total;
        }

        return view('admin.dashboard.index', compact(
            'totalRencanaAksi',
            'totalrenja',
            'totalmonev',
            'totalprogres',
            'listTahun',
            'tahunAktif',
            'dataChart',
            'renjaaktiv',
            'monevaktiv',
            'progresaktiv'
        ));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function navbarNotifikasi()
    {
        $rencana = RencanaKerja::latest()->take(5)->get();
        $progres = ProgresKerja::latest()->take(5)->get();
        $monev   = Monev::latest()->take(5)->get();

        // Gabung jadi satu collection
        $notifikasi = $rencana->concat($progres)->concat($monev)
            ->sortByDesc('created_at')
            ->take(5); // ambil 5 terbaru dari gabungan

        return view('components.navbar', compact('notifikasi'));
    }
}
