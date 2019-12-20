@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="accordion" id="documentationAccordion">
                @foreach($challenges as $challenge)
                <div class="card">
                    <div class="card-header" id="heading{{ $challenge }}" data-toggle="collapse" data-target="#collapse{{ $challenge }}">
                        <p>{{ $challenge }}. [Challenge Title]</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div id="collapse{{ $challenge }}" class="collapse" data-parent="#documentationAccordion">
                        <div class="card-body">
                            [Challenge information]
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
