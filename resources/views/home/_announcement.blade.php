@extends('layouts.home')

@section('title', 'Announcement')

@section('body')
    <!DOCTYPE html>
<html>
<head>
    <title>Announcements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
        }

        .announcement-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .announcement-item {
            margin-bottom: 15px;
            padding: 10px;
            border-left: 5px solid #2980b9;
            background-color: #f2f2f2;
        }

        .announcement-item h3 {
            color: #2980b9;
        }

        .announcement-item p {
            color: #555;
        }

        .announcement-item .timestamp {
            font-size: 12px;
            color: #888;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<h1>Announcements</h1>
@foreach ($users as $user)
<div class="announcement-container">
    <div class="announcement-item">
        <h3>{{$user -> title}}</h3>
        <p>{{$user -> reason}}</p>
        <p class="timestamp">{{$user -> date}}</p>
    </div>

    @endforeach
</div>

</body>
</html>


@endsection
