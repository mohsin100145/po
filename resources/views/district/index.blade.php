@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-12">
	        <h3>
	            <i class="fa fa-list-ul"></i>
	            List of <mark>District Names</mark>

	            <a href="{{ url('district/create') }}" class="btn btn-primary pull-right">
	                <i class="fa fa-plus"></i> Create <code><b>District Name</b></code>
	            </a>
	        </h3>
	        <div class="panel panel-danger">
	            <div class="panel-heading">
	                <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>District Names</b></code></h3>
	            </div>
	            <div class="panel-body">
	            	<div class="table-responsive">
		                <table id="myTable" class="table table-striped table-bordered table-hover">
		                    <thead>
		                        <tr class="success">
		                            <th>SL</th>
		                            <th>District Name</th>
		                            <th>Division Name</th>
		                            <th>Edit</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    <?php
		                        $i = 0;
		                    ?>
		                    @foreach($districts as $district)
		                        <tr>
		                            <td>{{ ++$i }}</td>
		                            <td>{{ $district->name }}</td>
		                            <td>{{ $district->division->name }}</td>
		                            <td>{!! Html::link("district/$district->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>  
		                        </tr>
		                    @endforeach
		                    </tbody>
		                </table>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
@endsection