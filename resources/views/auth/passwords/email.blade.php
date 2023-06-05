@extends('layouts.app')
@section('content')
@vite(['resources/js/app.js'])
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card py-3">
                <div class="card-header fs-5">{{ __('Réinitialiser le mot de passe') }}</div>

                <div class="card-body mt-2">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Entrer votre adresse email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary d-flex align-items-center gap-2">
                                    <span>{{ __('Envoyer') }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                      </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if (session('status'))
                <div class="alert alert-success w-75 mx-auto" role="alert">
                    Le lien de réinitialisation du mot de passe a été envoyé par e-mail
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
