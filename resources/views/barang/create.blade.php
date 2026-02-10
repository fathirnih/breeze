<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            Tambah Barang
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" value="{{ old('kode_barang') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" step="0.01" value="{{ old('harga') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
