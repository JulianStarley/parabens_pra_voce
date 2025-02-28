@extends('layouts.app')
@section('content')
<style>
    body {
        background: url('/img/parabens_pra_voce.png') no-repeat center center fixed;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .title-container {
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }
</style>
<div class="title-container">
    <h1>Parabéns pra Você</h1>
</div>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card col-md-6"
        style="border: 2px solid #007bff; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);">
        <div class="card-body">
            <form method="POST" action="{{ route('aniversarios.store') }}">
                @csrf
                <div class="form-group">
                    <div class="mb-4 form-group">
                        <label for="nome" class="form-label" style="color:white;">Qual seu Nome ?</label>
                        <input type="text" class="bg-white form-control text-dark" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento" class="form-label" style="color:white;">Informe a data de
                            Nascimento</label>
                        <input type="date" class="bg-white form-control text-dark" id="data_nascimento"
                            name="data_nascimento" required>
                    </div>
                    <br />
                    <br />
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary d-flex justify-content-end">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
