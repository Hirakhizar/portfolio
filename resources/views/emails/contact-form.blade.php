Subject: New Inquiry Received: {{ $data['subject'] }}

<p>
    Hi Hira,
</p>

<p>
    You have received a new message via the contact form on your website. Below are the details:
<br>
Name: {{ $data['name'] }} <br>
Email: {{ $data['email'] }} <br>
Subject: {{ $data['subject'] }} <br>

Message:<br>
{{ $data['message'] }}<br>

If you need to respond or require further clarification, feel free to contact the sender directly at the provided email.


</p>