<div class="mt-4 flex items-center justify-between">
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        @if (session('status') == 'Verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    
        <div>
            <button type="submit">
                {{ __('send Verification Email') }}
            </button>
        </div>
    </form>