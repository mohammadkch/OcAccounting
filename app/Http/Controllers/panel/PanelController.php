<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PanelController extends Controller
{

    public function index(): View
    {
        $user = Auth::user();
        return view('panel.index')->with('user', $user);
    }
}
