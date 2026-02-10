<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            Tambah Pelanggan
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="card-body">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <button class="btn btn-success">
                    <i class="bi bi-save"></i> Simpan
                </button>
                <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</x-app-layout>
