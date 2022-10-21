<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact App</title>
    </head>
    <body>
        <h1>Contact App</h1>
        <div>
            <a href="{{ route('contacts.index') }}">All contacts</a>
            <a href="{{ route('contacts.create') }}">Add contact</a>
            <a href="{{ route('contacts.show', 1) }}">Show contact</a>
        </div>
    </body>
</html>