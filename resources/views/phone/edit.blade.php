@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Update <code><b>Phone Extension</b></code> </h3>
                </div>

                <div class="panel-body">
                     {!! Form::model($phone, ['url' => "phone/$phone->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
                    <div class="required form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                        {!! Form::label('username', 'Phone Username', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                        <div class="col-xs-9 col-sm-9">
                            <div class="col-xs-12 col-sm-12">
                                {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'Enter Phone Number', 'autocomplete' => 'off', 'readonly' => 'readonly']) !!}
                                <span class="text-danger">
                                    {{ $errors->first('username') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="required form-group {{ $errors->has('secret') ? 'has-error' : ''}}">
                        {!! Form::label('secret', 'Phone Secret', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                        <div class="col-xs-9 col-sm-9">
                            <div class="col-xs-12 col-sm-12">
                                {!! Form::text('secret', null, ['class' => 'form-control', 'id' => 'secret', 'placeholder' => 'Enter Phone Secret', 'autocomplete' => 'off']) !!}
                                <span class="text-danger">
                                    {{ $errors->first('secret') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="required form-group {{ $errors->has('thana') ? 'has-error' : ''}}">
                        {!! Form::label('thana', 'Thana Name', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                        <div class="col-xs-9 col-sm-9">
                            <div class="col-xs-12 col-sm-12">
                                {!! Form::text('thana', null, ['class' => 'form-control', 'id' => 'thana', 'placeholder' => 'Enter Thana Name', 'autocomplete' => 'off']) !!}
                                <span class="text-danger">
                                    {{ $errors->first('thana') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12">
                            {!! Form::button('Submit', ['class' => 'btn btn-success btn-block', 'data-toggle' => 'modal', 'data-target' => '#myModal']) !!}
                        </div>
                    </div>

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Confirmation Message</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Do you want to <b><mark>Update Phone</mark></b>?</h3>
                                </div>
                                <div class="modal-footer bg-success">
                                    {!! Form::submit('Yes', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::button('No', ['class' => 'btn btn-danger', 'data-dismiss' => 'modal']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
