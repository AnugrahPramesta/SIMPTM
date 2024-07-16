<?php

namespace App\Http\Controllers;

use App\Models\User;
use finfo;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        return view('dashboard.profile', [
            'title' => 'Akun'
        ]);
    }

    public function editAkun(Request $request, $id)
    {
        // dd($user);
        $data = $request->validate([
            'name' => 'required',
            'nip' =>  'required',
        ]);
        // check if that old pass
        if ($request['password'] == null) {
            $data['password'] = auth()->user()->password;
        } else {
            $data['password'] = bcrypt($request['password']);
        }

        if ($data) {
            User::where('id', $id)->update($data);
            return back()->with('successEditAkun', 'Data akun berhasil diubah');
        }
        return back()->with('failEditAkun', 'Data akun gagal diubah');
    }
}
