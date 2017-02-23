@extends('layouts.main')

@section('title', 'REGISTER')


@section('content')

<div class="container-fluid">
		
		<div class="row m-t-10">
        	<div class="col-md-offset-2 col-md-10">
        		<h1 class="green-color"><strong>REGISTER</strong></h1>
        		<!-- 16:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
        			<iframe style="overflow-y: none !important; " frameborder="0" width="1055" height="1055" src="http://localhost:8000/register"></iframe>
        		</div>

        		
            </div>

        </div>

</div>


@endsection