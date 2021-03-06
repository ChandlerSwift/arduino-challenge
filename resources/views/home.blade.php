@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">
                    @foreach($attempts as $attempt)
                    <li class="list-group-item">{{ $attempt->succeeded ? "Passed" : "Failed" }} challenge {{ $attempt->challenge }} at {{ $attempt->created_at->toDateTimeString() }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
