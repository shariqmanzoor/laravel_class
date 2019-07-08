<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     
    <dl>
        <dt>ID:</dt>
        <dd>{{ $event->id }}</dd>
    </dl>
    <dl>
        <dt>Name:</dt>
        <dd>{{ $event->name }}</dd>
    </dl>
    <dl>
        <dt>City:</dt>
        <dd>{{ $event->city }}</dd>
    </dl>
    <dl>
        <dt>Country:</dt>
        <dd>{{ $event->country }}</dd>
    </dl>
    <dl>
        <dt>Description:</dt>
        <dd>{{ $event->description }}</dd>
    </dl>

</body>
</html>