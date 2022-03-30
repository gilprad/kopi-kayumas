<?php

namespace App\Http\Controllers\Ketua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.ketua.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required|string|max:64',
            'username'      => 'required|string|max:64|unique:users,id',
            'password'      => 'required|string|min:8',
            'address'       => 'nullable|string|max:255',
            'phone'         => 'nullable|string|phone:id',
            'group_name'    => 'nullable|string|max:64',
            'group_address' => 'nullable|string|max:255',
            'group_phone'   => 'nullable|string|phone:id'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name'         => $request->name,
            'username'     => $request->username,
            'password'     => bcrypt($request->password),
            'old_password' => $request->password
        ]);

        if (empty($user->profile) && empty($user->group)) {
            $user->profile()->create([
                'address' => $request->address,
                'phone'   => $request->phone
            ]);

            $user->group()->create([
                'name'    => $request->group_name,
                'address' => $request->group_address,
                'phone'   => $request->group_phone
            ]);
        } else {
            $user->profile()->update([
                'address' => $request->address,
                'phone'   => $request->phone
            ]);

            $user->group()->update([
                'name'    => $request->group_name,
                'address' => $request->group_address,
                'phone'   => $request->group_phone
            ]);
        }

        return redirect()->route('ketua.profile.index')->with('success', 'Data berhasil diubah');
    }
}
