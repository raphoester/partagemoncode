@extends('layouts.app')

@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre courriel') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification vous a été envoyé par mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, cliquez sur le lien de vérification que nous vous avons envoyé par mail.') }}
                    {{ __('Si vous n'avez pas reçu de mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en recevoir un autre.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
