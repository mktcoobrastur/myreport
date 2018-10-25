@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categorias de Convênios
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'markconvenios.store']) !!}

                        @include('markconvenios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
