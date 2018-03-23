<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | Email Verification</title>
  </head>
  <body>
    <h4>Welcome to {{ config('app.name') }}, {{ $data['name'] }}</h4><br>
    <p>Your registered email is {{ $data['email'] }}, please click on below link to verify your email</p><br>
    <a href="{{ url('verify/'. $data['token']) }}">Verify email</a>
  </body>
</html>
