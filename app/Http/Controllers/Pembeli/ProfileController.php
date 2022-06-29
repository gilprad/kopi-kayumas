<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.pembeli.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required|string|max:64',
            'username'      => 'required|string|max:64|unique:users,id',
            'password'      => 'required|string|min:8',
            'address'       => 'nullable|string|max:255',
            'phone'         => 'nullable|string|phone:id'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name'         => $request->name,
            'username'     => $request->username,
            'password'     => bcrypt($request->password),
            'old_password' => $request->password
        ]);

        if (empty($user->profile)) {
            $user->profile()->create([
                'address' => $request->address,
                'phone'   => $request->phone
            ]);
        } else {
            $user->profile()->update([
                'address' => $request->address,
                'phone'   => $request->phone
            ]);
        }

        return redirect()->route('pembeli.profile.index')->with('success', 'Data berhasil diubah');
    }
}
