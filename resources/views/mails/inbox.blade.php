<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
<h1>Mail HTML</h1>
<p><strong>Subject: </strong>{{ $mailContentSubject }}</p>
<p><strong>Name: </strong>{{ $mailContentName }}</p>
<p><strong>Email: </strong>{{ $mailContentEmail }}</p>
<p><strong>Message: </strong>{{ $mailContentMessage }}</p>
</body>
