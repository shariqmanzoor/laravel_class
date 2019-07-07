<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
</head>
<body>
    <!--<ul>
        @foreach($events as $event)
            <li>{{$event->name}}</li>
        @endforeach
    </ul>-->

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Country</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->city }}</td>
                <td>{{ $event->country }}</td>
                <td>{{ $event->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>