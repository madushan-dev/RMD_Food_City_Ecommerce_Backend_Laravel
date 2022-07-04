@component('mail::message')
# Hello {{ $email_data['name'] }}


### Your Inquiry<br>
{{ $email_data['subject'] }}<br>
### Reply<br>
{{ $email_data['message'] }} <br>

Thanks You,<br>
RMD Food City,<br>
305 Gonagala - Passara Rd, Hindagoda<br>
071 557 2723

@endcomponent
