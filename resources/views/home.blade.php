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

                    You are logged in!
                    <br/><br/>
                    <div class="row">
                        <div class="col col-md-3"><h4>My Name:</h4></div>
                        <div class="col col-md-3"><p> {{Auth::user()->name}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col col-md-3"><h4>My Email:</h4></div> 
                        <div class="col col-md-4"><p>{{Auth::user()->email}}</p></div>
                    </div>
                    <img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
