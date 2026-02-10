<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data User</title>

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
            Laporan Data User
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
                <th class="border border-black px-2 py-1">Nama</th>
                <th class="border border-black px-2 py-1">Email</th>
                <th class="border border-black px-2 py-1 w-24">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
            <tr>
                <td class="border border-black px-2 py-1 text-center">
                    {{ $loop->iteration }}
                </td>
                <td class="border border-black px-2 py-1">
                    {{ $u->name }}
                </td>
                <td class="border border-black px-2 py-1">
                    {{ $u->email }}
                </td>
                <td class="border border-black px-2 py-1 text-center">
                    {{ ucfirst($u->role) }}
                </td>
            </tr>
            @endforeach
        </tbody>
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
