@extends('layouts.master')

@section('content')
<!-- <div class="container-fluid" style="padding-right: 0px; padding-left: 1px;"> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h3>
                <i class="fa fa-list-ul"></i>
                List of <mark>CDR</mark>

                <!-- <a href="{{ url('carrier/create') }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i> Create <code><b>Carrier</b></code>
                </a> -->
            </h3>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>CDR</b></code></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive"> 
                        <table id="myTable" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="success">
                                    <th>SL</th>
                                    <th>ID</th>
                                    <th>calldate</th>
                                    <th>clid</th>
                                    <th>src</th>
                                    <th>dst</th>
                                    <th>channel</th>
                                    <th>dstchannel</th>
                                    <th>lastapp</th>
                                    <th>lastdata</th>
                                    <th>duration</th>
                                    <th>billsec</th>
                                    <th>disposition</th>
                                    <th>amaflags</th>
                                    <th>accountcode</th>
                                    <th>uniqueid</th>
                                    <th>userfield</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 0;
                            ?>
                            @foreach($cdrs as $cdr)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $cdr->id }}</td>
                                    <td>{{ $cdr->calldate }}</td>
                                    <td>{{ $cdr->clid }}</td>
                                    <td>{{ $cdr->src }}</td>
                                    <td>{{ $cdr->dst }}</td>
                                    <td>{{ $cdr->channel }}</td>
                                    <td>{{ $cdr->dstchannel }}</td>
                                    <td>{{ $cdr->lastapp }}</td>
                                    <td>{{ $cdr->lastdata }}</td>
                                    <td>{{ $cdr->duration }}</td>
                                    <td>{{ $cdr->billsec }}</td>
                                    <td>{{ $cdr->disposition }}</td>
                                    <td>{{ $cdr->amaflags }}</td>
                                    <td>{{ $cdr->accountcode }}</td>
                                    <td>{{ $cdr->uniqueid }}</td>
                                    <td>{{ $cdr->userfield }}</td>
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
