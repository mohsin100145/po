@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Create <code><b>Phone Extension</b></code> </h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'phone/store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                    
                    <div class="required form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                        {!! Form::label('username', 'Phone Username', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                        <div class="col-xs-9 col-sm-9">
                            <div class="col-xs-12 col-sm-12">
                                {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'Enter Phone Number', 'autocomplete' => 'off']) !!}
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

                    <div class="form-group required {{ $errors->has('division_id') ? 'has-error' : '' }}">
                        {!! Form::label('division_id', 'Select Division Name', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
                        <div class="col-xs-9 col-sm-9">
                            <div class="col-xs-12 col-sm-12">
                                {!! Form::select('division_id', $divisionList, null, ['class' => 'form-control', 'placeholder' => 'Select Division Name', 'id' => 'division_id']) !!}
                                <span class="text-danger">
                                    {{ $errors->first('division_id') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <span id="district_show"></span>

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
                            {!! Form::button('Submit', ['class' => 'btn btn-primary btn-block', 'data-toggle' => 'modal', 'data-target' => '#myModal']) !!}
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
                                    <h3>Do you want to <b><mark>Create Phone</mark></b>?</h3>
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

@section('script')
    <script>
        $(document).ready(function(){
            $("#division_id").change(function(){
                //alert("The text has been changed.");
                var divisionId = $("#division_id").val();
                var url = '{{ url("/phone/division-district-show")}}';
                $.get(url+'?division_id='+divisionId, function (data) {
                    $('#district_show').html(data);
                });
            });
        });

        // $(document).ready(function () {
        //     $("#ticketForm").submit(function () {
        //         $(".submitBtnTicket").attr("disabled", true);
        //         return true;
        //     });
        // });
    </script>
@endsection