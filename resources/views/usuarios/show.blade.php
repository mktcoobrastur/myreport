@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
<<<<<<< HEAD
            Usuario
=======
        {!! $usuario->name !!}
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('usuarios.show_fields')
                    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
