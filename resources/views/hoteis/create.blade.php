@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hotei
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'hoteis.store']) !!}

                        @include('hoteis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
