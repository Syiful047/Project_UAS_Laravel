<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
    //user
    public function index()
    {
        $user = User::all();
        return view('admin.users.index', [
            'users' => $user
        ]);

    }
    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/users');
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit', [
            'users' => $user
        ]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = user::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/users')->with('success', 'Data user berhasil diubah.');
    }
    public function destroy(Request $request){
        user::destroy($request->id);

        return redirect('/users')->with('success', 'Data user berhasil dihapus.');
    }
}
