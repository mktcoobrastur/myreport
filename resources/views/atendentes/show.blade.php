@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Atendente
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('atendentes.show_fields')
                    <a href="{!! route('atendentes.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
