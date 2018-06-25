Hello {{ $user->name }}

You chenged new email, so we need to verify this new address. Please use the link below:

{{ route('verify', $user->verification_token) }}