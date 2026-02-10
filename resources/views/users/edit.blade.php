<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">Edit User</h2>
    </x-slot>

    <div class="py-4 container">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name"
                       value="{{ $user->name }}"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email"
                       value="{{ $user->email }}"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="admin" {{ $user->role=='admin'?'selected':'' }}>
                        Admin
                    </option>
                    <option value="user" {{ $user->role=='user'?'selected':'' }}>
                        User
                    </option>
                </select>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</x-app-layout>
