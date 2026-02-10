<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">Tambah User</h2>
    </x-slot>

    <div class="py-4 container">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="">-- Pilih Role --</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Password <small class="text-muted">(opsional)</small></label>
                <input type="password" name="password" class="form-control"
                    placeholder="Kosongkan jika pakai default">
            </div>


            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</x-app-layout>
