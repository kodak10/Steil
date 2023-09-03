<!DOCTYPE html>
<html>
<head>
    <title>Message de contact</title>
</head>
<body>
    <h2>Nom : {{ $data['name'] }}</h2>
    <h2>Adresse e-mail : {{ $data['email'] }}</h2>
    <h2>Sujet : {{ $data['subject'] }}</h2>
    <p>Message :</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
