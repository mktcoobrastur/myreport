@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Funcionário
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('funcionarios.show_fields')
                    <a href="{!! route('funcionarios.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
