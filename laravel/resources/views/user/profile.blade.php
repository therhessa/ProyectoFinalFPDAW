@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1>Perfil</h1>
        	<hr/>
        	<div class="profile-user">
	        	@if($user->image)
			        <div class="container-avatar">
						<img src="/storage/users/{{$user->image}}"  class="avatar"> 
			        </div>
					<div class="col-md-8">
						<h3> {{$user->name}}
						{{$user->surname}}</h3>
						<h4 style="color:#A0ADC2;">{{'@'.$user->nick}}</h4>
						<h6 style="color:#ccc;" class="float-right">Se unió el: {{$user->created_at}}</h6>
					</div>
	        	@endif
	        	
        	</div>

        	<div class="clearfix"></div>
        	<hr/>
        	<div class="clearfix"></div>
        
			
			
        </div>
		   
    </div>
</div>
@endsection