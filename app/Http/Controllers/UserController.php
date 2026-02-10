<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

public function store(Request $request)
{
    $request->validate([
        'name'  => 'required',
        'email' => 'required|email|unique:users',
        'role'  => 'required',
        'password' => 'nullable|min:6'
    ]);

    $password = $request->password
        ? Hash::make($request->password)
        : Hash::make('password'); // default

    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'role'     => $request->role,
        'password' => $password,
    ]);

    return redirect()->route('users.index')
        ->with('success', 'User berhasil ditambahkan');
}


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'role'  => 'required',
        ]);

        User::findOrFail($id)->update([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil diupdate');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User berhasil dihapus');
    }
    public function cetak()
{
    $users = User::all();
    return view('users.cetak', compact('users'));
}
}
