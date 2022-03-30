<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->orderBy('created_at', 'ASC')->paginate(10);
        $roles = Role::where('name', '!=', 'admin')->get();

        return view('dashboard.admin.user.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|string|max:64',
            'username' => 'required|string|max:64|unique:users',
            'password' => 'required|string|min:8',
            'address'  => 'nullable|string|max:255',
            'phone'    => 'nullable|string|phone:id'
        ]);

        $user = User::create([
            'name'         => $request->name,
            'username'     => $request->username,
            'password'     => bcrypt($request->password),
            'old_password' => $request->password
        ]);

        $user->assignRole($request->role);

        $user->profile()->create([
            'address' => $request->address,
            'phone'   => $request->phone
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::where('name', '!=', 'admin')->get();

        return view('dashboard.admin.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => 'required|string|max:64',
            'username' => 'required|string|max:64|unique:users,id',
            'password' => 'required|string|min:8',
            'address'  => 'nullable|string|max:255',
            'phone'    => 'nullable|string|phone:id'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name'         => $request->name,
            'username'     => $request->username,
            'password'     => bcrypt($request->password),
            'old_password' => $request->password
        ]);

        $user->syncRoles($request->role);

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

        return redirect()->route('admin.pengguna.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
