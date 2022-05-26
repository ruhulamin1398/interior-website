<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome To Karigor.</title>
</head>

<body>

  <h4>Name: <b>{{$contactUsMail['name']}}</b></h4>
  <h4>Email: <b>{{$contactUsMail['email']}}</b></h4>
  <h4>Phone Number: <b>{{$contactUsMail['phone']}}</b></h4>


  <h3>Message:</h3>
  {{$contactUsMail['message']}}

</body>

</html>