@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="mb-4">{{ __('Before proceeding, please check your email for a verification link.') }}</p>

                    <div class="mb-4">
                        <img src="{{ asset('images/email_verification.png') }}" alt="Email Verification" class="img-fluid">
                    </div>

                    <p>{{ __('If you did not receive the email') }},</p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __('Request Another Verification Email') }}</button>
                    </form>

                    <p class="mt-4">{{ __('Thank you for choosing our platform.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
