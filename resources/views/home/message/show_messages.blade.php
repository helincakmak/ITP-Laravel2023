@extends('layouts.home')

@section('title', 'Show Message')

@section('body')

        <div class="container">
            <h1>My Messages</h1>

            <div class="row mb-4">

                <div class="col-sm-3">

                    <a href="/users/create-message" class="btn btn-block btn-primary btn-lg" style="width: 200px; margin-left: 20px;"  >sent message </a>

                </div>
            </div>

            @if ($messages->isEmpty())
                <p>No messages available.</p>
            @else
                <ul>
                    @foreach ($messages as $message)
                        <li>
                            @if ($message->sender_id == auth()->id())
                                <strong>To: {{ $message->receiver->name }}</strong>
                            @else
                                <strong>From: {{ $message->sender->name }}</strong>
                            @endif
                            <p>{{ $message->message }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endsection
