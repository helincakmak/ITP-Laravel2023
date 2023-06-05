@extends('layouts.home')

@section('title', 'Detail Message')

@section('body')



    @foreach($messages as $message)
        <div>
            <h3>Gönderilen: {{ $message->receiver->name }}</h3>
            <p>Mesaj: {{ $message->message }}</p>
        </div>
    @endforeach

    <form action="{{ route('users.messages.store') }}" method="post">
        @csrf
        <textarea name="message" cols="30" rows="10"></textarea>
        <button type="submit">Mesaj Gönder</button>
    </form>


@endsection

