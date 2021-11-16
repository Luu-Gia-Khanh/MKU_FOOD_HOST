<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomLayoutController extends Controller
{
    public function show_layout_custom(){
        return view('admin.custom_layout.custom_layout');
    }
}
