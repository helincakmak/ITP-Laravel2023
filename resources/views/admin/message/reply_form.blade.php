@extends('layouts.adminbase')

@section('title', 'Reply Message')

@section('content')
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h5>Message Details</h5>
                </div>

                @foreach($messages as $message)
                    <div>
                        <h3>Gönderen: {{ $message->sender->name }}</h3>
                        <p>Mesaj: {{ $message->message }}</p>
                        @if(!$message->read)
                            <form action="{{ route('admin.mark_as_read', $message) }}" method="post">
                                @csrf
                                <button type="submit">Okundu Olarak İşaretle</button>
                            </form>
                        @endif
                    </div>

                @endforeach

            <div class="card mt-4">
                <div class="card-header">
                    <h5>Reply</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.reply', $message->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="reply">Reply:</label>
                            <textarea id="reply" name="reply" class="form-control" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Reply</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
