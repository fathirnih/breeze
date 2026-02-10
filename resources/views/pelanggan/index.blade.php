<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            Data Pelanggan
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card-body">
                <div class="alert">
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-success">
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
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggan as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-primary">
                                        <i class="bi bi-pen"></i> Edit
                                    </a>
                                    <form action="{{ route('pelanggan.destroy', $p->id) }}"
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
                                <td colspan="4" class="text-center">
                                    Data pelanggan belum ada
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
