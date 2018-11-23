@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vendasdia
        </h1>
    </section>
<<<<<<< HEAD
=======

>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
<<<<<<< HEAD
                    {!! Form::open(['route' => 'vendasdias.store']) !!}

                        @include('vendasdias.fields')

=======
                    {!! Form::open(['route' => 'vendasdias.store'], ['class' => 'form-control']) !!}

                        @include('vendasdias.fields')


>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
