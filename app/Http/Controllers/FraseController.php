<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FraseModel;

class FraseController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('index', ['frases' => FraseModel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('formCadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frase = new FraseModel();
        $frase->frase = $request->input('frase');
        $frase->autor = $request->input('autor');
        $frase->save();
        return view ('index', ['frases' => FraseModel::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $frase = FraseModel::find($id);
        return view ('formEditar', ['frase' => $frase]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $frase = FraseModel::find($id);
        return view ('formEditar', ['frase' => $frase]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $frase = FraseModel::find($id);
        $frase->frase = $request->input('frase');
        $frase->autor = $request->input('autor');
        $frase->save();
        return view ('index', ['frases' => FraseModel::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $frase = FraseModel::find($id);
        $frase->delete();
        return view ('index', ['frases' => FraseModel::all()]);
    }
}
