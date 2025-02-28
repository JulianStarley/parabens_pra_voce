@extends('layouts.app')
@section('content')
<h1>Editar Aniversariante</h1>
<form method="POST" action="{{ route('aniversarios.update', $aniversario->id) }}">
    @csrf
    @method('PUT')
    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $aniversario->nome }}" required>
    <label>Data de Nascimento:</label>
    <input type="date" name="data_nascimento" value="{{ $aniversario->data_nascimento }}" required>
    <button type="submit">Atualizar</button>
</form>
@endsection
