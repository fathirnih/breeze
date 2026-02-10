<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 text-dark">
            Data User
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card-body">
                <div class="alert">
                    <a href="{{ route('users.create') }}" class="btn btn-success"><i class="bi bi-plus"></i>Create Data</a>
                    <a href="{{ route('users.cetak') }}" class="btn btn-warning"><i class="bi bi-printer"> Cetak</i></a>
                </div>
                    <table class="table table-bordered table-striped">
                        <thead class="table-primary text-dark">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user['name'] }}</td>
                                    <td>{{ $user['email'] }}</td>
                                    <td>{{ $user['role'] }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-primary"><i class="bi bi-pen"></i>Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
    @csrf @method('DELETE')
    <button class="btn btn-danger" onclick="return confirm('Hapus user?')">
        Delete
    </button>
</form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>
