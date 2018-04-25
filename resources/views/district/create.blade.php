@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Create Form of <code><b>District Name</b></code> </h3>
				</div>
				<div class="panel-body">
			  		@include('district._form')
				</div>
			</div>
		</div>
	</div>	
</div>	
@endsection