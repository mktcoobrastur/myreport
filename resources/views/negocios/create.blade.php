@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Negócios
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'negocios.store']) !!}

                        @include('negocios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
