@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row m-t-120">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! 
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <button type="button" class="btn btn-green">LOGOUT!</button>
                        </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
