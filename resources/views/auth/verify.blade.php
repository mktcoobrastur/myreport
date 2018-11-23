@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('o Código de verificação foi enviado para seu e-mail.') }}
                        </div>
                    @endif

                    {{ __('Depois do processo, por favor verifique o link de verificação no email.') }}
                    {{ __('Se você não recebeu o e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para solicitar novamente') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
