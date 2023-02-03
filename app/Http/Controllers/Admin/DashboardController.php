<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

/* INTERFACCIA PRIVATA LOGGATO */
class DashboardController extends Controller
{

  public function home()
  {
    $user = Auth::user();
    if ($user->is_superadmin == true) {
      /* posso mostrare una view diversa */
      return view('admin.dashboard');
    } else {
      /* posso mostrare una view diversa */
      return view('user.dashboard');

    }
    
  }
}