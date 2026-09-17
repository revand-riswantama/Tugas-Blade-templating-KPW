<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
</head>
<body>
    <h1>Selamat Datang{{ !empty($firstName) ? ', ' . $firstName . ' ' . $lastName : '!' }}</h1>
    <p><b>Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama!</b></p>
    <a href="{{ route('data') }}">List data siswa</a>
</body>
</html>
