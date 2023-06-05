@extends('layouts.home')

@section('title', 'Create Message')

@section('body')
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h5>Create Message</h5>
                </div>
                <div class="card-body">
                    @if ($admins->isEmpty())
                        <p>No admins available to send a message.</p>
                    @else
                        <form method="POST" action="{{ route('users.store_message') }}">
                            @csrf

                            <div class="form-group">
                                <label for="receiver_id">Receiver:</label>
                                <select id="receiver_id" name="receiver_id" class="form-control" required>
                                    <option value="">Select an admin</option>
                                    @foreach ($admins as $admin)
                                        <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    @endsection
