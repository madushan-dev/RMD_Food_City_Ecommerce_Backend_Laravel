@component('mail::message')
# Hello {{ $email_data['name'] }}


## Your Order is Placed !<br>

### Order Number - {{ $email_data['order_id'] }}<br>
### Name - {{ $email_data['name'] }}<br>
### Date - {{ dateWithoutSeconds($email_data['date']) }}<br>
### Order Id - {{ $email_data['order_id'] }}<br>
### Payment Amount - Rs. {{ $email_data['payment'] }}.00<br>



Thanks You,<br>
RMD Food City,<br>
305 Gonagala - Passara Rd, Hindagoda<br>
071 557 2723

@endcomponent
