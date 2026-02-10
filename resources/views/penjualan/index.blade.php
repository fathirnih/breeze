<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            Data Penjualan
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card-body">
                <div class="alert">
                    <a href="{{ route('penjualan.create') }}" class="btn btn-success">
                        <i class="bi bi-plus"></i> Create Data
                    </a>
                    <a href="{{ route('penjualan.cetak') }}" target="_blank" class="btn btn-warning">
                        <i class="bi bi-printer"></i> Cetak
                    </a>
                </div>

                <table class="table table-bordered table-striped">
    <thead class="table-primary text-dark">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($penjualan as $p)
            @php
                $total = $p->barang ? $p->barang->harga * $p->jumlah : 0;
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->barang->kode_barang ?? '-' }}</td>
                <td>{{ $p->barang->nama_barang ?? '-' }}</td>
                <td>
                    Rp {{ number_format($p->barang->harga ?? 0, 0, ',', '.') }}
                </td>
                <td>{{ $p->jumlah }}</td>
                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">
                    Data penjualan belum ada
                </td>
            </tr>
        @endforelse
    </tbody>

    <tfoot class="table-secondary fw-bold">
        <tr>
            <td >Total Penjualan</td>
            <td colspan="4" class="text-end"></td>
            <td>
                Rp {{ number_format($grandTotal, 0, ',', '.') }}
            </td>
        </tr>
    </tfoot>
</table>



            </div>
        </div>
    </div>
</x-app-layout>
