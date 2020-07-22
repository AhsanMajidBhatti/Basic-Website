@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if (count($message) > 0)
        @foreach ($message as $value)
            <ul class="list-group; margin-top:2px;">
                <li class="list-group-item">Name: {{$value->name}}</li>
                <li class="list-group-item">Email: {{$value->email}}</li>
                <li class="list-group-item">Message: {{$value->message}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
    <p> This is the apparent sidebar </p>
@endsection