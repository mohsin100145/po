@extends('layouts.master')

@section('content')
<!-- <div class="container-fluid" style="padding-right: 0px; padding-left: 1px;"> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h3>
                <i class="fa fa-list-ul"></i>
                List of <mark>Carriers</mark>

                <a href="{{ url('carrier/create') }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i> Create <code><b>Carrier</b></code>
                </a>
            </h3>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> List of <code><b>Carriers</b></code></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive"> 
                        <table id="myTable" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="success">
                                    <th>SL</th>
                                    <th>ID</th>
                                    <th>carrierid</th>
                                    <th>register</th>
                                    <th>host</th>
                                    <th>username</th>
                                    <th>secret</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 0;
                            ?>
                            @foreach($carriers as $carrier)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $carrier->id }}</td>
                                    <td>{{ $carrier->carrierid }}</td>
                                    <td>{{ $carrier->register }}</td>
                                    <?php
                                        if (($posHost = strpos($carrier->host, "=")) !== FALSE) { 
                                            $host = substr($carrier->host, $posHost+1); 
                                    ?>
                                            <td>{{ $host }}</td>
                                    <?php
                                        } else {
                                    ?>
                                            <td>{{ "invalid input: ".$carrier->host }}</td>
                                    <?php
                                        } 
                                    ?>

                                    <?php
                                        if (($posUsername = strpos($carrier->username, "=")) !== FALSE) { 
                                            $username = substr($carrier->username, $posUsername+1); 
                                    ?>
                                            <td>{{ $username }}</td>
                                    <?php
                                        } else {
                                    ?>
                                            <td>{{ "Wrong Input: ".$carrier->username }}</td>
                                    <?php
                                        } 
                                    ?>
                                   <!--  <td>{{ $carrier->username }}</td>
                                    <td>{{ $carrier->secret }}</td> -->
                                    <?php
                                        if (($posSecret = strpos($carrier->secret, "=")) !== FALSE) { 
                                            $secret = substr($carrier->secret, $posSecret+1); 
                                    ?>
                                            <td>{{ $secret }}</td>
                                    <?php
                                        } else {
                                    ?>
                                            <td>{{ "Wrong Input: ".$carrier->secret }}</td>
                                    <?php
                                        } 
                                    ?>
                                    <td>{!! Html::link("carrier/$carrier->id",' View', ['class' => 'fa fa-eye btn btn-primary btn-xs']) !!}</td>
                                    <td>{!! Html::link("carrier/$carrier->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-success btn-xs']) !!}</td>
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
