@extends('layouts.app')
@section('content')
@vite(['resources/js/app.js'])
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card py-4">
                <div class="card-header fs-5">{{ __('Verifier votre adresse email') }}</div>

                <div class="card-body mt-2">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
