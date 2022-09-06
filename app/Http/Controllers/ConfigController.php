<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfigRequest;
use App\Models\Config;

class ConfigController extends Controller
{
    public function index()
    {
        $configs = Config::all();
        return view('control.configs', compact('configs'));
    }

    public function update(ConfigRequest $request)
    {
        foreach ($request->all() as $key => $input) {
            if ($key !== '_token' && $key !== '_method')
                Config::updateOrCreate(
                    ['field_name' => $key],
                    ['field_value' => $input]
                );
        }

        return redirect()->route('control.configs.index')->with('status', 'Configurações atualizadas com sucesso');
    }
}