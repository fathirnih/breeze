<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            Data Barang
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card-body">
                <div class="alert">
                    <a href="{{ route('barang.create') }}" class="btn btn-success">
                        <i class="bi bi-plus"></i> Create Data
                    </a>
                    <a href="#" class="btn btn-warning">
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
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($barang as $b)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $b->kode_barang }}</td>
                                <td>{{ $b->nama_barang }}</td>
                                <td>Rp {{ number_format($b->harga, 0, ',', '.') }}</td>
                                <td>{{ $b->stok }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', $b->id_barang) }}" class="btn btn-primary">
                                        <i class="bi bi-pen"></i> Edit
                                    </a>

                                    <form action="{{ route('barang.destroy', $b->id_barang) }}"
                                          method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Yakin hapus data?')">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    Data barang belum ada
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
    