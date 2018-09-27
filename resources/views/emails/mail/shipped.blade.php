@component('mail::message')
    # Contact form | Wordsmith

    **Name:** {{ $mail->name }}

    **Email:** {{ $mail->email }}

    **Web site:** {{ $mail->website }}

    **Message:** {{ $mail->message }}

@endcomponent