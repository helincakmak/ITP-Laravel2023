@extends('layouts.adminbase')

@section('title', 'Reply Message')

@section('content')
    @foreach($messages as $message)
        <div>
            <h3>Gönderen: {{ $message->sender->name }}</h3>
            <strong>Received at:</strong> {{ $message->created_at->format('Y-m-d H:i:s') }}<br>

            <p>Mesaj: {{ $message->message }}</p>

            @if(!$message->read)

                <form action="{{ route('admin.mark_as_read', $message) }}" method="post">
                    @csrf
                    <button type="submit">Okundu Olarak İşaretle</button>
                </form>
            @endif

        </div>

        @if($message->sender_id !== auth()->id() && $message->reply)
            <div>
                <p>Mesaj: {{ $message->reply->message }}</p>
            </div>
        @endif
        <form action="{{ route('admin.reply', ['message' => $message->id]) }}" method="post">
            @csrf
            <textarea name="message" cols="20" rows="3"></textarea>
            <button type="submit">Cevapla</button>
        </form>
    @endforeach



@endsection
