Hello {{ $user->name }}

Thank you for create and account. Please verify an email using this link:

{{ route('verify', $user->verification_token) }}