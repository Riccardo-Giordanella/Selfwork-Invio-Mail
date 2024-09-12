<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messaggio inviato</title>
</head>
<body>

    <h1>Grazie per averci contattato {{$contactMail['username']}}!</h1>
    <p>Ecco alcuni dettagli della tua mail:</p>
    <ul>
        <li>Nome: {{$contactMail['username']}}</li>
        <li>Email: {{$contactMail['email']}}</li>
        <li>Messaggio: {{$contactMail['message']}}</li>
    </ul>

    <p>Ti ringraziamo per il tempo che ci hai dedicato, con il tuo feedback possiamo migliorarci e crescere ancora di più</p>
    <p>Ti auguriamo un buon proseguimento di giornata,</p>
    <p>Lo staff del sito</p>

</body>
</html>