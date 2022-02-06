<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome To Karigor.</title>
</head>

<body>
 <h3><b>{{$contactUsMail['name']}}</b> just send a message from contact us </h3>

      <h4>Sent from <b>{{$contactUsMail['email']}}</b></h4>


      <h3>Message:</h3>
     {{$contactUsMail['message']}}
      <h4>Thank You</h4>
      <h3>Regards</h3>
      <h4>Karigor Interior</h4>

</body>

</html>