<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../img/contact-book.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <title>All contacts</title>
    </head>
    <body>
        <h1>All contacts</h1>
        <div>
            <a href="{{ route('contacts.create') }}">Add contact</a>

            <?php foreach ($contacts as $id => $contact) { ?>
                <p>{{ $contact['name'] }} | {{ $contact['phone'] }} | <a href="{{ route('contacts.show', $id) }}">Show</a></p>
            <?php } ?>
        </div>
    </body>
</html>