@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-12">
	        <h3>
	            <i class="fa fa-list-ul"></i>
	            List of <mark>Division Names</mark>
	            
		            <a href="{{ url('division/create') }}" class="btn btn-primary pull-right">
		                <i class="fa fa-plus"></i> Create <code><b>Division Name</b></code>
		            </a>
				
	        </h3>
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Division Names</b></code></h3>
	            </div>
	            <div class="panel-body">
	            	<div class="table-responsive">
	                <table id="myTable" class="table table-bordered table-striped table-hover">
	                    <thead>
	                        <tr class="success">
	                            <th>SL</th>
	                            <th>Division Names</th>
	                            <!-- <th>View</th> -->
	                            
	                            	<th>Edit</th>
	                            
	                            <!-- <th>Delete</th> -->
	                        </tr>
	                    </thead>
	                    <tbody>
	                    <?php
	                        $i = 0;
	                    ?>
	                    @foreach($divisions as $division)
	                        <tr>
	                            <td>{{ ++$i }}</td>
	                            <td>{{ $division->name }}</td>
	                            <!-- <td>{!! Html::link("result/$division->id",' View', ['class' => 'fa fa-eye btn btn-success btn-xs']) !!}</td> -->
	                            
	                            	<td>{!! Html::link("division/$division->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-primary btn-xs']) !!}</td>
	                            
	                            <!-- <td><a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal-{{ $division->id }}">
	                                    <i class="fa fa-trash"></i> Delete
	                                </a>
	                            </td> -->

	                            <!-- Modal -->
	                            <div class="modal fade" id="myModal-{{ $division->id }}" role="dialog">
	                                <div class="modal-dialog">

	                                    <!-- Modal content-->
	                                    <div class="modal-content">
	                                        <div class="modal-header">
	                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
	                                            <h4 class="modal-title">DELETE</h4>
	                                        </div>
	                                        <div class="modal-body">
	                                            <p>Do you want to delete this Result?</p>
	                                        </div>
	                                        <div class="modal-footer">
	                                            {{--<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>--}}

	                                            {{ Form::open(['method' => 'DELETE', 'url' => "result/$division->id"]) }}
	                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
	                                            {{ Form::close() }}
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
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