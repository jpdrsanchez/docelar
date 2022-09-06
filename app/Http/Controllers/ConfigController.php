<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $configs = Config::all();
        return view('control.configs', compact('configs'));
    }

    public function store(Request $request)
    {
        $configs = Config::all();
        return view('control.configs', compact('configs'));
    }
}