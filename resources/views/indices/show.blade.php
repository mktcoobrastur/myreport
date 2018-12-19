@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Indice
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('indices.show_fields')
                    <a href="{!! route('indices.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
