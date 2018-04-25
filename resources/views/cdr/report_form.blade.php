@extends('layouts.master')

@section('content')
<!-- <div class="container-fluid" style="padding-right: 0px; padding-left: 1px;"> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h3>
                <i class="fa fa-list-ul"></i>
                <mark>Call Detail Record</mark> Report
            </h3>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><i class="fa fa-list-ul"></i> Date Wise <code><b>CDR Report</b></code> Form</h3>
                </div>
                <div class="panel-body">

                    <h3>Call Detail Record (CDR) Report</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Form::open([
                                    'url'         => 'cdr-report-show',
                                    'method'      => 'post',
                                    'role'        => 'form',
                                    'id'          => 'report-form',
                                    'class'       => 'form-horizontal'
                                ])
                            !!}


                            <div class="required form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                                {!! Form::label('start_date', 'Start Date', ['class' => 'col-sm-3 col-sm-offset-0 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('start_date', null, ['class' => 'form-control', 'id' => 'datepicker']) !!}
                                    <span class="help-block text-danger">
                                        {!! $errors->first('start_date') !!}
                                    </span>
                                </div>
                            </div>

                            <div class="required form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                                {!! Form::label('end_date', 'End Date', ['class' => 'col-sm-3 col-sm-offset-0 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('end_date', null, ['class' => 'form-control', 'id' => 'datepicker1']) !!}
                                    <span class="help-block text-danger">
                                        {!! $errors->first('end_date') !!}
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7 text-center">
                                    {!! Form::submit('Report Show',['class'=>'btn btn-primary btn-block']) !!}
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/start/jquery-ui.css">
    <style type="text/css">
        .ui-datepicker-month{ color: black; }
        .ui-datepicker-year{ color: black; }
    </style>
@endsection


@section('script')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            // $( "#datepicker" ).datepicker({ changeMonth: true, changeYear: true });
            // $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
            // $( "#datepicker1" ).datepicker({ changeMonth: true, changeYear: true });
            // $( "#datepicker1" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
            $( "#datepicker" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd" });
            $( "#datepicker" ).datepicker( "setDate", "0" );
            $( "#datepicker1" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd" });
            $( "#datepicker1" ).datepicker( "setDate", "0" );
        } );
     </script>
@endsection
