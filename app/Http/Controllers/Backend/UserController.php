<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $getUser = User::find($id);

        return view('backend.sections.user.update', compact('getUser'));
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $getUser = User::find($id);

        $this->validate($request, [
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', 'min:4'],
            'password' => ['nullable', 'min:8']
        ]);

        $getUser->update([
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ]);

        if($request->get('password')){
            $getUser->update([
                'password' => bcrypt($request->get('password'))
            ]);
        }

        return back()->with('flash', 'Registro actualizado exitosamente!');
    }
}
