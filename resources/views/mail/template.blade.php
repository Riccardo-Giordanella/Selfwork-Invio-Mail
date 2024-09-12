<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messaggio inviato</title>
</head>
<body>

    <h1>Il messaggio inviato da: {{$contactMail['username']}}!</h1>
    <p>Ecco alcuni dettagli:</p>
    <ul>
        <li>Nome: {{$contactMail['username']}}</li>
        <li>Email: {{$contactMail['email']}}</li>
        <li>Messaggio: {{$contactMail['message']}}</li>
    </ul>

</body>
</html>