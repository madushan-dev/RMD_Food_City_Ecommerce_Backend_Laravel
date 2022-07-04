@component('mail::message')
# Hello {{ $email_data['name'] }}


## Your Order Status is Updated !<br>

### Order Number - {{ $email_data['order_id'] }}<br>
### Status - {{ $email_data['status'] }}<br>
### Date - {{ dateWithoutSeconds($email_data['date']) }}<br>



@if ($email_data['delivery_company'] !='' && $email_data['tracking_num'] !='')

### Delivery Company - {{ $email_data['delivery_company'] }}<br>
### Tracking Number - {{ $email_data['tracking_num'] }}<br>
@endif



Thanks You,<br>
RMD Food City,<br>
305 Gonagala - Passara Rd, Hindagoda<br>
071 557 2723

@endcomponent
