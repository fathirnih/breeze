<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>

    @vite('resources/css/app.css') {{-- Tailwind --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        @media print {
            body { font-size: 12px; }
        }
    </style>
</head>

<body x-data x-init="window.print()" class="bg-white text-gray-800 px-12 py-10">

    <!-- KOP LAPORAN -->
    <div class="text-center border-b-2 border-black pb-4 mb-6">
        <h1 class="text-xl font-bold uppercase tracking-wide">
            Laporan Penjualan
        </h1>
        <p class="text-sm">Sistem Informasi Manajemen</p>
        <p class="text-xs mt-1">
            Tanggal Cetak: {{ now()->format('d F Y') }}
        </p>
    </div>

    <!-- TABEL DATA -->
    <table class="w-full border border-black border-collapse">
        <thead>
            <tr class="bg-gray-200 text-center">
                <th class="border border-black px-2 py-1 w-10">No</th>
                <th class="border border-black px-2 py-1">Kode Barang</th>
                <th class="border border-black px-2 py-1">Nama Barang</th>
                <th class="border border-black px-2 py-1 w-24">Harga</th>
                <th class="border border-black px-2 py-1 w-24">Jumlah</th>
                <th class="border border-black px-2 py-1 w-24">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $p)
            @php
                $total = $p->barang ? $p->barang->harga * $p->jumlah : 0;
            @endphp
            <tr class="text-center">
                <td class="border border-black px-2 py-1">{{ $loop->iteration }}</td>
                <td class="border border-black px-2 py-1">{{ $p->barang->kode_barang ?? '-' }}</td>
                <td class="border border-black px-2 py-1">{{ $p->barang->nama_barang ?? '-' }}</td>
                <td class="border border-black px-2 py-1 text-end">
                    Rp {{ number_format($p->barang->harga ?? 0, 0, ',', '.') }}
                </td>
                <td class="border border-black px-2 py-1">{{ $p->jumlah }}</td>
                <td class="border border-black px-2 py-1 text-end">
                    Rp {{ number_format($total, 0, ',', '.') }}
                </td>
            </tr>
            @endforeach
        </tbody>

        <tfoot class="table-secondary fw-bold text-end">
            <tr>
                <td colspan="5" class="px-2 py-1">Grand Total</td>
                <td class="border border-black px-2 py-1">
                    Rp {{ number_format($grandTotal, 0, ',', '.') }}
                </td>
            </tr>
        </tfoot>
    </table>

    <!-- TANDA TANGAN -->
    <div class="mt-14 flex justify-end">
        <div class="text-center">
            <p>Mengetahui,</p>
            <div class="h-20"></div>
            <p class="font-semibold underline">
                Administrator
            </p>
        </div>
    </div>

</body>
</html>
