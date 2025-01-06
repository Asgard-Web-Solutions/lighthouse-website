<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminControlPanelController extends Controller
{
    public function index() {
        return view('admin.acp');
    }

    public function users() {

        return view('admin.users');
    }
}
