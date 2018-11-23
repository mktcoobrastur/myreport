@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nova Tarefa
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tconvenios.store']) !!}

                        @include('tconvenios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
