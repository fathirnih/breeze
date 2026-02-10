<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            Tambah Penjualan
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="card-body">
            <form action="{{ route('penjualan.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Barang</label>
        <select name="barang_id" class="form-control" required>
            <option value="">-- Pilih Barang --</option>
            @foreach ($barang as $b)
                <option value="{{ $b->id_barang }}">
                    {{ $b->kode_barang }} - {{ $b->nama_barang }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" min="1" required>
    </div>

    <button type="submit" class="btn btn-primary">
        Simpan
    </button>
</form>

        </div>
    </div>
</x-app-layout>
