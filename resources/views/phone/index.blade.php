@extends('layouts.master')

@section('content')
<!-- <div class="container-fluid" style="padding-right: 0px; padding-left: 1px;"> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h3>
                <i class="fa fa-list-ul"></i>
                List of <mark>Phone Extensions</mark> & <mark>Police Stations</mark>

                <a href="{{ url('phone/create') }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i> Create <code><b>Phone Extension</b></code> & <code><b>Police Stations</b></code>
                </a>
            </h3>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Phone Extensions</b></code> & <code><b>Police Stations</b></code></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive"> 
                        <table id="myTable" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="success">
                                    <th>SL</th>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Secret</th>
                                    <th>Police Station</th>
                                    <th>District</th>
                                    <th>Division</th>
                                    <th>Remarks</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <!-- <th>Delete</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 0;
                            ?>
                            @foreach($phones as $phone)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $phone->id }}</td>
                                    <td><strong>{{ $phone->username }}</strong></td>
                                    <td>{{ $phone->secret }}</td>
                                    <td><strong>{{ $phone->thana }}</strong></td>
                                    @if(isset($phone->district->name))
                                        <td>{{ $phone->district->name }}</td>
                                    @else
                                        <td></td>
                                    @endif
                                    @if(isset($phone->district->division->name))
                                        <td>{{ $phone->district->division->name }}</td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>{{ $phone->remarks }}</td>
                                    <td>{!! Html::link("phone/$phone->id",' View', ['class' => 'fa fa-eye btn btn-info btn-xs']) !!}</td>
                                    <td>{!! Html::link("phone/$phone->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-success btn-xs']) !!}</td>
                                    <!-- <td><a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal-{{ $phone->id }}">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td> -->

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal-{{ $phone->id }}" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">DELETE</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Do you want to delete this Phone?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    {{--<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>--}}

                                                    {{ Form::open(['method' => 'DELETE', 'url' => "phone/$phone->id"]) }}
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
