<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aniversario;

class AniversariosController extends Controller
{
    public function index()
    {
        $aniversarios = Aniversario::all();
        return view('aniversarios.index', compact('aniversarios'));
    }

    public function create()
    {
        return view('aniversarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'data_nascimento' => 'required|date'
        ]);
        Aniversario::create($request->all());
        return redirect()->route('aniversarios.index');
    }

    public function edit(Aniversario $aniversario)
    {
        return view('aniversarios.edit', compact('aniversario'));
    }

    public function update(Request $request, Aniversario $aniversario)
    {
        $request->validate([
            'nome' => 'required',
            'data_nascimento' => 'required|date'
        ]);
        $aniversario->update($request->all());
        return redirect()->route('aniversarios.index');
    }

    public function destroy(Aniversario $aniversario)
    {
        $aniversario->delete();
        return redirect()->route('aniversarios.index');
    }

}
