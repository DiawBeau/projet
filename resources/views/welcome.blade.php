@extends('layout.layout')


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><!-- 
                <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{Auth::user()->name}} here the planning 
                </div>
            </div>
        </div>
    </div>

@endsection