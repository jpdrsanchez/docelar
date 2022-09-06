<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use App\Models\Bank;
use App\Models\Media;
use Carbon\Carbon;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::all();

        return view('control.banks.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();

        return view('control.banks.create', compact('medias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankRequest $request)
    {
        $bank = new Bank;
        $bank->agency = $request->agency;
        $bank->code = $request->code;
        $bank->account = $request->account;
        $bank->name = $request->name;
        $bank->document_type = $request->document_type;
        $bank->document_value = $request->document_value;
        $bank->save();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $bank->media()->save($media, ['type' => 'bank_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            $bank->media()->attach($media->id, ['type' => 'bank_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }

        return redirect()->route('control.banks.index')->with('status', 'Banco Criado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankRequest  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankRequest $request, Bank $bank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        //
    }
}