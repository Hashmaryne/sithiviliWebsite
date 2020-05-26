@component('mail::message')
<strong>Name: </strong> {{$data['name']}} {{$data['surname']}} <br>
<strong>Email: </strong> {{$data['email']}} <br>
<strong>Mobile Number: </strong> {{$data['mobile']}} <br>
<strong>Qualifications: </strong> {{$data['qualifications']}} <br>
<strong>Comments: </strong> {{$data['comments']}}
@endcomponent
