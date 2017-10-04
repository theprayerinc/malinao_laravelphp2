@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>Hey! {{ Auth::user()->name }} wanna play a GAME?</center>
                </div>
                <h2>
            </div>
        </div>
    </div>
</div>
@endsection
