<?php

namespace App\Exports;

use App\Models\RencanaKerja;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RencanaExport implements FromCollection, WithHeadings, WithStyles, WithTitle, ShouldAutoSize, WithCustomStartCell, WithColumnWidths
{
    protected $user;
    protected $tahun; // ✅ 1. Tambahkan property untuk tahun

    // ✅ 2. Modifikasi constructor untuk menerima tahun
    public function __construct($user, $tahun)
    {
        $this->user = $user;
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $query = RencanaKerja::with(['subprogram', 'opd', 'pengguna'])->where('delete_at', '0');

        if ($this->user->level !== 'Super Admin') {
            $query->where('id_pengguna', $this->user->id);
        }

        // ✅ 3. Tambahkan kondisi untuk memfilter berdasarkan tahun
        if ($this->tahun) {
            $query->where('tahun', $this->tahun);
        }

        $rencanaKerjas = $query->get();

        // ... sisa kode method collection() Anda tidak perlu diubah ...
        $rows = collect();
        $no = 1;

        foreach ($rencanaKerjas as $item) {
            $anggarans = $item->anggaran ? explode('; ', $item->anggaran) : ['-'];
            $sumberdanas = $item->sumberdana ? explode('; ', $item->sumberdana) : ['-'];
            $maxRows = max(count($anggarans), count($sumberdanas));

            for ($i = 0; $i < $maxRows; $i++) {
                if ($i === 0) {
                    $rows->push([
                        'NO'               => $no,
                        'Strategi'      => $item->subprogram->subprogram ?? '-',
                        'Rencana Aksi'     => $item->rencana_aksi,
                        'Sub Kegiatan'     => $item->sub_kegiatan,
                        'Kegiatan'         => $item->kegiatan,
                        'Nama Program'     => $item->nama_program,
                        'Lokasi'           => $item->lokasi,
                        'Volume'           => $item->volume,
                        'Satuan'           => $item->satuan,
                        'Anggaran'         => $anggarans[$i] ?? '-',
                        'Sumber Dana'      => $sumberdanas[$i] ?? '-',
                        'Tahun'            => $item->tahun,
                        'Perangkat Daerah' => $item->opd->nama ?? '-',
                        'Status'           => $item->status,
                        'Keterangan'       => $item->keterangan,
                    ]);
                } else {
                    $rows->push([
                        'NO' => '',
                        'Strategi' => '',
                        'Rencana Aksi' => '',
                        'Sub Kegiatan' => '',
                        'Kegiatan' => '',
                        'Nama Program' => '',
                        'Lokasi' => '',
                        'Volume' => '',
                        'Satuan' => '',
                        'Anggaran'         => $anggarans[$i] ?? '-',
                        'Sumber Dana'      => $sumberdanas[$i] ?? '-',
                        'Tahun' => '',
                        'Perangkat Daerah' => '',
                        'Status' => '',
                        'Keterangan' => '',
                    ]);
                }
            }
            $no++;
        }

        return $rows;
    }

    // ... sisa method lain di class ini (headings, styles, dll) tidak perlu diubah ...
    public function startCell(): string
    {
        return 'A3';
    }

    public function headings(): array
    {
        return [
            'NO',
            'Strategi',
            'Rencana Aksi',
            'Sub Kegiatan',
            'Kegiatan',
            'Nama Program',
            'Lokasi',
            'Volume',
            'Satuan',
            'Anggaran',
            'Sumber Dana',
            'Tahun',
            'Perangkat Daerah',
            'Status',
            'Keterangan',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // 1. SETUP VARIABEL
        $lastColumn = 'O'; // Kolom terakhir di Rencana Kegiatan adalah O
        $collection = $this->collection(); 
        $rowCount = count($collection);
        $lastRow = $rowCount > 0 ? (3 + $rowCount) : 3;

        // 2. JUDUL UTAMA (Baris 1)
        $sheet->mergeCells("A1:{$lastColumn}1");
        $sheet->setCellValue('A1', 'Rencana Kegiatan Percepatan Pertumbuhan Ekonomi');
        $sheet->getRowDimension(1)->setRowHeight(35);
        
        $sheet->getStyle('A1')->applyFromArray([
            'font' => ['bold' => true, 'size' => 16, 'color' => ['argb' => 'FF333333']],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, 
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFE0E0E0'] // BACKGROUND ABU-ABU
            ],
        ]);

        // 3. STYLE GLOBAL (Border & Alignment untuk SEMUA sel data)
        // Kita terapkan ini dulu ke area data agar border rapi dan tidak menimpa warna header
        $dataRange = "A3:{$lastColumn}{$lastRow}";
        $sheet->getStyle($dataRange)->applyFromArray([
            'borders' => [
                'allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            ],
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ],
        ]);

        // 4. STYLE HEADER (Baris 3) - PERBAIKAN WARNA DISINI
        $headerRange = "A3:{$lastColumn}3";
        $sheet->getRowDimension(3)->setRowHeight(30);
        
        $sheet->getStyle($headerRange)->applyFromArray([
            'font' => [
                'bold' => true, 
                'size' => 11, 
                'color' => ['argb' => 'FFFFFFFF'] // FONT PUTIH
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFFF8C42'] // BACKGROUND ORANGE (Sesuai Tema)
            ],
        ]);

        // 5. ALIGNMENT KHUSUS PER KOLOM & MERGE CELL
        if ($rowCount > 0) {
            
            // Kolom Rata Kiri (Untuk Teks Panjang)
            $leftAlignedColumns = ['B', 'C', 'D', 'E', 'F'];
            foreach ($leftAlignedColumns as $column) {
                $sheet->getStyle("{$column}4:{$column}{$lastRow}")
                      ->getAlignment()
                      ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
            }
            
            // Kolom Rata Tengah (Untuk Angka/Status)
            $centerAlignedColumns = ['A', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O'];
            foreach ($centerAlignedColumns as $column) {
                $sheet->getStyle("{$column}4:{$column}{$lastRow}")
                      ->getAlignment()
                      ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            }

            // LOGIKA MERGE CELL OTOMATIS
            $currentRow = 4;
            foreach ($collection as $index => $row) {
                // Cek apakah ini baris induk (punya Nomor)
                if (!empty($row['NO'])) {
                    $mergeCount = 0;
                    // Hitung baris anak di bawahnya
                    for ($j = $index + 1; $j < $rowCount; $j++) {
                        if (empty($collection[$j]['NO'])) {
                            $mergeCount++;
                        } else {
                            break;
                        }
                    }

                    // Lakukan Merge jika ada anak
                    if ($mergeCount > 0) {
                        $endRow = $currentRow + $mergeCount;
                        
                        // Daftar kolom yang AKAN di-merge 
                        // (KITA SKIP KOLOM J & K yaitu Anggaran & Sumber Dana agar tidak menyatu)
                        $columnsToMerge = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O'];
                        
                        foreach ($columnsToMerge as $column) {
                            $sheet->mergeCells("{$column}{$currentRow}:{$column}{$endRow}");
                        }
                    }
                }
                $currentRow++;
            }
        }
    }

    public function title(): string
    {
        return 'Rencana Kerja';
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 25,
            'C' => 30,
            'D' => 30,
            'E' => 25,
            'F' => 30,
            'G' => 20,
            'H' => 10,
            'I' => 10,
            'J' => 20,
            'K' => 20,
            'L' => 10,
            'M' => 25,
            'N' => 15,
            'O' => 30,
        ];
    }
}
