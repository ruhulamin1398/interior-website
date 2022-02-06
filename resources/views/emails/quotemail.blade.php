<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Karigor.</title>
</head>

<body>
    <h2>A new Messege from Quote</h2>

    <b>Name: {{$quoteMail['name']}}</b><br>
    <b>Email: {{$quoteMail['email']}} </b></h4><br>
    <b>Phone: {{$quoteMail['phone']}}</b><br>
    <b>Project Type: {{$quoteMail['projecttype']}}</b><br>
    <b>Budget: {{$quoteMail['budget']}}</b><br>
    <b>Project Deadline: {{$quoteMail['deadline']}}</b><br>
    <b>Contact With Me Through: {{$quoteMail['contact']}}</b><br>
    <b>Working Experiance With Interior Design Firm: {{$quoteMail['experience']}}</b><br>

    <b>Message:</b>
    <p>{{$quoteMail['message']}}</p><br>


    <h4>Thank You</h4>
    <h3>Regards</h3>
    <h4>Karigor Interior</h4>

</body>

</html>