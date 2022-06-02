@if(session('message'))
    {{ session('message') }}   
@endif

<p>Your email is not verified, please click on the link in the email!<p>

<form method="POST" action="/email/verification-notification">
    @csrf
    <button type="submit">Resend verify email notification</button>
</form>
