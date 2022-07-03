@component('mail::message')
# Hello {{ $email_data['name'] }}


## Products Receiving Successful !<br>

### Receivings Number - {{ $email_data['receiving_id'] }}<br>
### Date - {{ $email_data['date'] }}<br>




Thanks You,<br>
RMD Food City,<br>
305 Gonagala - Passara Rd, Hindagoda<br>
071 557 2723

@endcomponent
