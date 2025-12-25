<?php

namespace App\Exports;

use App\Models\RencanaAksi_6_tahun;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RencanaAksiExport implements FromCollection, WithHeadings, WithStyles, WithTitle, ShouldAutoSize, WithCustomStartCell, WithColumnWidths
{
    protected $tahun; // ✅ 1. Tambahkan property untuk menampung tahun

    // ✅ 2. Buat constructor untuk menerima variabel tahun dari controller
    public function __construct($tahun)
    {
        $this->tahun = $tahun;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Mulai query seperti biasa
        $query = RencanaAksi_6_tahun::with(['subprogram', 'opd', 'penggunas'])
            ->where('delete_at', '0');

        // ✅ 3. Terapkan filter where jika variabel tahun tidak kosong
        if ($this->tahun) {
            $query->where('tahun', $this->tahun);
        }

        // Ambil data setelah query selesai
        $rencanaAksis = $query->get();

        $rows = collect();
        $no = 1;

        foreach ($rencanaAksis as $item) {
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
                        'Tahun'            => $item->tahun,
                        'Perangkat Daerah' => $item->opd->nama ?? '-',
                        'Anggaran'         => $anggarans[$i] ?? '-',
                        'Sumber Dana'      => $sumberdanas[$i] ?? '-',
                        'Keterangan'       => $item->keterangan,
                    ]);
                } else {
                    $rows->push([
                        'NO'               => '',
                        'Strategi'      => '',
                        'Rencana Aksi'     => '',
                        'Sub Kegiatan'     => '',
                        'Kegiatan'         => '',
                        'Nama Program'     => '',
                        'Lokasi'           => '',
                        'Volume'           => '',
                        'Satuan'           => '',
                        'Tahun'            => '',
                        'Perangkat Daerah' => '',
                        'Anggaran'         => $anggarans[$i] ?? '-',
                        'Sumber Dana'      => $sumberdanas[$i] ?? '-',
                        'Keterangan'       => '',
                    ]);
                }
            }
            $no++;
        }

        return $rows;
    }

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
            'Tahun',
            'Perangkat Daerah',
            'Anggaran',
            'Sumber Dana',
            'Keterangan',
        ];
    }

  public function styles(Worksheet $sheet)
    {
        // 1. SETUP VARIABEL
        $lastColumn = 'T'; // Kolom terakhir di Monev adalah T
        $collection = $this->collection(); 
        $rowCount = $collection->count();
        $lastRow = $rowCount > 0 ? (3 + $rowCount) : 3;

        // 2. JUDUL UTAMA (Baris 1)
        $sheet->mergeCells("A1:{$lastColumn}1");
        $sheet->setCellValue('A1', 'Monitoring dan Evaluasi Percepatan Pertumbuhan Ekonomi');
        $sheet->getRowDimension(1)->setRowHeight(30);
        
        $sheet->getStyle('A1')->applyFromArray([
            'font' => ['bold' => true, 'size' => 16],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, 
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            ],
        ]);

        // 3. STYLE GLOBAL (Border & Alignment untuk SEMUA sel)
        // Kita terapkan ini dulu ke area data agar border rapi
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

        // 4. STYLE HEADER (Baris 3) - SESUAI PERMINTAAN (ORANGE)
        $headerRange = "A3:{$lastColumn}3";
        $sheet->getRowDimension(3)->setRowHeight(28);
        
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
                'startColor' => ['argb' => 'FFFF8C42'] // BACKGROUND ORANGE
            ],
        ]);

        // 5. ALIGNMENT KHUSUS PER KOLOM & MERGE CELL
        if ($rowCount > 0) {
            // A. Atur Perataan Teks (Kiri/Tengah)
            
            // Kolom Rata Kiri (Untuk Teks Panjang)
            $leftAlignedColumns = ['B', 'C', 'D', 'E', 'F', 'O', 'P', 'Q', 'T'];
            foreach ($leftAlignedColumns as $column) {
                $sheet->getStyle("{$column}4:{$column}{$lastRow}")
                      ->getAlignment()
                      ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
            }
            
            // Kolom Rata Tengah (Untuk Angka/Status)
            $centerAlignedColumns = ['A', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'R', 'S'];
            foreach ($centerAlignedColumns as $column) {
                $sheet->getStyle("{$column}4:{$column}{$lastRow}")
                      ->getAlignment()
                      ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            }

            // B. Logika Merge Cell Otomatis
            $currentRow = 4;
            foreach ($collection as $index => $row) {
                // Cek apakah ini baris induk (punya Nomor)
                if (!empty($row['No'])) {
                    $mergeCount = 0;
                    // Hitung baris anak di bawahnya
                    for ($j = $index + 1; $j < $rowCount; $j++) {
                        if (empty($collection[$j]['No'])) {
                            $mergeCount++;
                        } else {
                            break;
                        }
                    }

                    // Lakukan Merge jika ada anak
                    if ($mergeCount > 0) {
                        $endRow = $currentRow + $mergeCount;
                        
                        // Daftar kolom yang AKAN di-merge 
                        // (KITA SKIP KOLOM 'J' dan 'K' yaitu Anggaran & Sumber Dana agar tidak menyatu)
                        $columnsToMerge = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T'];
                        
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
        return 'Rencana Aksi';
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
            'J' => 10,
            'K' => 25,
            'L' => 20,
            'M' => 20,
            'N' => 30,
        ];
    }
}
