@extends('layouts.home')

@section('title', 'MUSIC')

@section('body')


<div class="card-header">
    <h3 class="card-title">Songs</h3>
</div>

<div class="card-body p-0">
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 10px">Id</th>
            <th>Artist</th>
            <th>Song</th>
            <th>Album</th>
            <th>Genre</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <th>{{$user -> id}}</th>
                <th>{{$user -> artist}} </th>
                <th>{{$user -> song}} </th>
                <th>{{$user -> album}}</th>
                <th>{{$user -> genre}} </th>


                <!-- Diğer sütunlar -->
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
