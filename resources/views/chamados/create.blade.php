@extends('layouts.app')

@section('content')
    <section class="content-header">
    @include('chamados.topo')
       <h1>
            Chamados
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'chamados.store']) !!}

                        @include('chamados.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection