<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Monitoring dan Evaluasi</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 10mm;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            font-size: 9px; /* Sedikit diperbesar agar terbaca */
            line-height: 1.3;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        /* --- HEADER SECTION (JUDUL UTAMA) --- */
        .header-section {
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa; /* Background abu muda */
            border-bottom: 3px solid #FF8C42; /* Garis bawah Orange */
        }

        .header-section h1 {
            font-size: 18px; /* Lebih besar */
            font-weight: 800; /* Lebih tebal */
            color: #333; /* Warna Abu Gelap */
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- INFO SECTION --- */
        .info-section {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-left: 4px solid #FF8C42; /* Aksen Orange di kiri */
            padding: 10px 15px;
            margin-bottom: 15px;
            font-size: 10px;
        }

        .info-row {
            display: inline-block;
            margin-right: 30px;
        }

        .info-label {
            font-weight: bold;
            color: #555;
        }

        .info-value {
            color: #FF8C42; /* Value berwarna Orange */
            font-weight: bold;
            margin-left: 5px;
        }

        /* --- TABLE STYLING --- */
        .table-container {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 8px;
            background: white;
        }

        /* Header Tabel (ORANGE) */
        thead th {
            background-color: #FF8C42; /* Warna Orange Tema */
            color: white; /* Teks Putih */
            font-weight: bold;
            font-size: 8px;
            text-transform: uppercase;
            padding: 8px 4px;
            border: 1px solid #e0e0e0;
            text-align: center;
            vertical-align: middle;
        }

        /* Body Tabel */
        tbody tr:nth-child(even) {
            background-color: #fff8f5; /* Zebra striping orange sangat muda */
        }

        td {
            padding: 6px 4px;
            border: 1px solid #dee2e6;
            vertical-align: top;
        }

        /* --- UTILITIES --- */
        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        .font-bold { font-weight: bold; }

        /* Badge Status */
        .status-badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 7px;
            text-transform: uppercase;
            color: white;
        }
        
        .status-valid { background-color: #28a745; }
        .status-pending { background-color: #dc3545; }
        .rka-sudah { background-color: #17a2b8; }
        .rka-belum { background-color: #ffc107; color: #333; }

        /* Footer */
        .footer {
            margin-top: 20px;
            text-align: right;
            font-size: 8px;
            color: #888;
            font-style: italic;
            border-top: 1px solid #eee;
            padding-top: 5px;
        }
    </style>
</head>

<body>
    <div class="header-section">
        <h1>Monitoring dan Evaluasi Percepatan Pertumbuhan Ekonomi</h1>
    </div>

    <div class="info-section">
        <div class="info-row">
            <span class="info-label">Periode Tahun:</span>
            <span class="info-value">{{ $tahun ?? 'Semua Tahun' }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Total Data:</span>
            <span class="info-value">{{ count($monev) }} Data</span>
        </div>
        <div class="info-row">
            <span class="info-label">Tanggal Cetak:</span>
            <span class="info-value">{{ date('d/m/Y H:i') }}</span>
        </div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th style="width: 2%;">No</th>
                    <th style="width: 6%;">Strategi</th>
                    <th style="width: 8%;">Rencana Aksi</th>
                    <th style="width: 8%;">Sub Kegiatan</th>
                    <th style="width: 8%;">Kegiatan</th>
                    <th style="width: 8%;">Program</th>
                    <th style="width: 5%;">Lokasi</th>
                    <th style="width: 2%;">Vol Target</th>
                    <th style="width: 3%;">Satuan</th>
                    <th style="width: 4%;">Anggaran</th>
                    <th style="width: 4%;">Sumber Dana</th>
                    <th style="width: 3%;">Tahun</th>
                    <th style="width: 6%;">Perangkat Daerah</th>
                    <th style="width: 7%;">Dokumen Anggaran</th>
                    <th style="width: 7%;">Realisasi Anggaran</th>
                    <th style="width: 6%;">Vol Realisasi</th>
                    <th style="width: 6%;">Satuan Volume</th>
                    <th style="width: 4%;">Status</th>
                    <th style="width: 4%;">Catatan</th>
                    <th style="width: 4%;">Ket</th>
                </tr>
            </thead>
            {{-- GANTI SELURUH ISI <tbody> ANDA DENGAN KODE DI BAWAH INI --}}
            <tbody>
                @foreach ($monev as $i => $row)
                    <tr>
                        {{-- No --}}
                        <td class="text-center">{{ $i + 1 }}</td>

                        {{-- Kolom Data Utama --}}
                        <td class="text-left long-text">{{ $row->subprogram->subprogram ?? '-' }}</td>
                        <td class="text-left long-text">{{ $row->rencanakerja->rencana_aksi ?? '-' }}</td>
                        <td class="text-left long-text">{{ $row->rencanakerja->sub_kegiatan ?? '-'}}</td>
                        <td class="text-left long-text">{{ $row->rencanakerja->kegiatan ?? '-' }}</td>
                        <td class="text-left long-text">{{ $row->rencanakerja->nama_program ?? '-'}}</td>
                        <td class="text-center">{{ $row->rencanakerja->lokasi ?? '-'}}</td>
                        <td class="text-center">{{ $row->rencanakerja->volume ?? '-' }}</td>
                        <td class="text-center">{{ $row->rencanakerja->satuan ?? '-'}}</td>

                        {{-- ANGGARAN --}}
                        <td class="text-center" style="padding: 0;">
                            @php $anggarans = explode('; ', $row->anggaran); @endphp
                            @foreach ($anggarans as $anggaran)
                                <div
                                    style="padding: 4px 2px; @if (!$loop->last) border-bottom: 1px solid #dee2e6; @endif">
                                    {{ $anggaran ?: '-' }}
                                </div>
                            @endforeach
                        </td>

                        {{-- SUMBER DANA --}}
                        <td class="text-center" style="padding: 0;">
                            @php $sumberdanas = explode('; ', $row->sumberdana); @endphp
                            @foreach ($sumberdanas as $sumber)
                                <div
                                    style="padding: 4px 2px; @if (!$loop->last) border-bottom: 1px solid #dee2e6; @endif">
                                    {{ $sumber ?: '-' }}
                                </div>
                            @endforeach
                        </td>

                        {{-- Tahun & OPD --}}
                        <td class="text-center">{{ $row->rencanakerja->tahun ?? '-' }}</td>
                        <td class="text-center">{{ $row->opd->nama ?? '-' }}</td>

                        {{-- DOKUMEN ANGGARAN --}}
                        <td class="text-center">
                            @if (is_array($row->dokumen_anggaran) && !empty(array_filter($row->dokumen_anggaran)))
                                @foreach ($row->dokumen_anggaran as $status)
                                    @if ($status)
                                        <span
                                            class="status-badge {{ str_contains($status, 'ADA') ? 'rka-sudah' : 'rka-belum' }}">{{ $status }}</span><br>
                                    @endif
                                @endforeach
                            @else
                                -
                            @endif
                        </td>

                        {{-- REALISASI --}}
                        <td class="text-left">
                            @if (is_array($row->realisasi) && !empty(array_filter($row->realisasi)))
                                @php
                                    $romanMap = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV'];
                                    $outputLines = [];
                                    foreach ($row->realisasi as $triwulan => $nilai) {
                                        if ($nilai) {
                                            $tw = $romanMap[$triwulan] ?? $triwulan;
                                            $outputLines[] = "TW {$tw}: <strong>{$nilai}</strong>";
                                        }
                                    }
                                    echo implode('<br>', $outputLines);
                                @endphp
                            @else
                                <span style="display: block; text-align: center;">-</span>
                            @endif
                        </td>

                        {{-- VOL REALISASI --}}
                        <td class="text-left">
                            @if (is_array($row->volumeTarget) && !empty(array_filter($row->volumeTarget)))
                                @php
                                    $romanMap = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV'];
                                    $outputLines = [];
                                    foreach ($row->volumeTarget as $triwulan => $nilai) {
                                        if ($nilai) {
                                            $tw = $romanMap[$triwulan] ?? $triwulan;
                                            $outputLines[] = "TW {$tw}: <strong>{$nilai}</strong>";
                                        }
                                    }
                                    echo implode('<br>', $outputLines);
                                @endphp
                            @else
                                <span style="display: block; text-align: center;">-</span>
                            @endif
                        </td>

                        {{-- SATUAN REALISASI (DIPERBAIKI) --}}
                        <td class="text-left">
                            @if (is_array($row->satuan_realisasi) && !empty(array_filter($row->satuan_realisasi)))
                                @php
                                    $romanMap = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV'];
                                    $outputLines = [];
                                    foreach ($row->satuan_realisasi as $triwulan => $nilai) {
                                        if ($nilai) {
                                            $tw = $romanMap[$triwulan] ?? $triwulan;
                                            $outputLines[] = "TW {$tw}: <strong>{$nilai}</strong>";
                                        }
                                    }
                                    echo implode('<br>', $outputLines);
                                @endphp
                            @else
                                <span style="display: block; text-align: center;">-</span>
                            @endif
                        </td>

                        {{-- Status --}}
                        <td class="text-center">
                            @if ($row->status == 'Valid')
                                <span class="status-badge status-valid">Valid</span>
                            @else
                                <span class="status-badge status-pending">Pending</span>
                            @endif
                        </td>

                        {{-- Catatan (Pesan) --}}
                        <td class="text-center">{{ $row->pesan ?? '-' }}</td>

                        {{-- KETERANGAN / URAIAN (DIPERBAIKI) --}}
                        <td class="text-left">
                            @if (is_array($row->uraian) && !empty(array_filter($row->uraian)))
                                @php
                                    $romanMap = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV'];
                                    $outputLines = [];
                                    foreach ($row->uraian as $triwulan => $nilai) {
                                        if ($nilai) {
                                            $tw = $romanMap[$triwulan] ?? $triwulan;
                                            $outputLines[] = "TW {$tw}: {$nilai}";
                                        }
                                    }
                                    echo implode('<br>', $outputLines);
                                @endphp
                            @else
                                <span style="display: block; text-align: center;">-</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="footer">
        <strong>Total Program:</strong> {{ count($monev) }} |
        <strong>Dicetak pada:</strong> {{ date('d F Y, H:i:s') }} WIB |
        Halaman 1
    </div>
</body>

</html>
