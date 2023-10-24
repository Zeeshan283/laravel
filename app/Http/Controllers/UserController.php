<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //
    public function edit($id)
    {
        $edit = User::where('id', '=', $id)->first();

        return view('admin.seller.profile', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->restaurant_name = $request->restaurant_name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }   
        if (!is_null($request->file('image'))) {
            File::delete($user->image);
            $extension = $request->file('image')->getClientOriginalName();
            $imageName = uniqid() . '.' .  $extension;
            $path = $request->file('image')->move('upload/', $imageName);
            $user->update(['image' => $path->getPathname()]);
        }
        $user->update();
        return redirect()->back();
    }
}