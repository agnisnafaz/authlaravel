<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class TenantLoginController extends Controller
{
    public function login()
    {
        $data['page_title'] = 'Tenant - Login';

        return view('tenant.login', $data);
    }
    
    public function do_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('tenant')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('tenant.dashboard');
        }
        return redirect()->back()->with(['danger' => 'Proses login tidak berhasil']);
    }
}
