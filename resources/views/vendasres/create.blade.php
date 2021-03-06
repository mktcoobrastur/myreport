@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Registro de Vendas Representantes
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'vendasres.store']) !!}

                        @include('vendasres.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
