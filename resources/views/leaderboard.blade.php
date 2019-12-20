@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($users as $user)
            <div class="card mb-3">
                <div class="card-header">{{ $loop->iteration }}. {{ $user->name }}
                    
                        
                <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div></div>

                <ul class="list-group list-group-flush">
                    @foreach($user->attempts as $attempt)
                    <li class="list-group-item">{{ $attempt->succeeded ? "Passed" : "Failed" }} challenge {{ $attempt->challenge }} at {{ $attempt->created_at->toDateTimeString() }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
