<h1>{{config('app.name')}}</h1>
<hr>
Hello {{$user->name}}
<p style="color: green">
    <strong>Registration success.</strong>
</p><br>
<strong>Click link for activation:</strong>
<a href="{{config('app.url')}}/user/activation/{{$user->activation_key}}">click here</a>
<strong>or open this link in your browser:</strong><br>
<span style="color: darkblue">{{config('app.url')}}/user/activation/{{$user->activation_key}}</span>
<hr>
Nano Texno Blog @ 2020
<h6 style="color: cadetblue">r.tamerlan LLC</h6>
