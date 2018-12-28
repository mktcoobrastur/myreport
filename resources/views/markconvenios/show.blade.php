@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categorias de Convênio
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('markconvenios.show_fields')
                    <a href="<?php echo $_ENV['APP_URL']; ?>mark" class="btn btn-default">Voltar</a>
                    <a href="<?php echo $_ENV['APP_URL']; ?>markconveniados/create?r={!! $markconvenio->id !!}" class="btn btn-default">Adicionar Convênio</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
