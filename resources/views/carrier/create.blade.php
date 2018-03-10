@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><i class="fa fa-pencil"></i> Create <code><b>Carrier</b></code> </h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'carrier/store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                    
                    <div class="required form-group {{ $errors->has('carrierid') ? 'has-error' : ''}}">
                        {!! Form::label('carrierid', 'carrierid', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                        <div class="col-xs-9 col-sm-9">
                            <div class="col-xs-12 col-sm-12">
                                {!! Form::text('carrierid', null, ['class' => 'form-control', 'id' => 'carrierid', 'placeholder' => 'Enter carrierid (Example: RND333)', 'autocomplete' => 'off']) !!}
                                <span class="text-danger">
                                    {{ $errors->first('carrierid') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="required form-group {{ $errors->has('register') ? 'has-error' : ''}}">
                        {!! Form::label('register', 'register', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                        <div class="col-xs-9 col-sm-9">
                            <div class="col-xs-12 col-sm-12">
                                {!! Form::text('register', null, ['class' => 'form-control', 'id' => 'register', 'placeholder' => 'Enter register (Example: register => 9610100333:56832a5896b@202.51.179.237:5060/9610100333)', 'autocomplete' => 'off']) !!}
                                <span class="text-danger">
                                    {{ $errors->first('register') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="thumbnail">
                        <div class="text-center bg-success"><b><i>Account Entry</i></b></div>

                        <div class="required form-group {{ $errors->has('disallow') ? 'has-error' : ''}}">
                            {!! Form::label('disallow', 'disallow', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('disallow', 'disallow=all', ['class' => 'form-control', 'id' => 'disallow', 'placeholder' => 'Enter disallow (Example: disallow=all)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('disallow') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('type') ? 'has-error' : ''}}">
                            {!! Form::label('type', 'type', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('type', 'type=friend', ['class' => 'form-control', 'id' => 'type', 'placeholder' => 'Enter type (Example: type=friend)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('type') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('dtmfmode') ? 'has-error' : ''}}">
                            {!! Form::label('dtmfmode', 'dtmfmode', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('dtmfmode', 'dtmfmode=rfc2833', ['class' => 'form-control', 'id' => 'dtmfmode', 'placeholder' => 'Enter dtmfmode (Example: dtmfmode=rfc2833)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('dtmfmode') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('context') ? 'has-error' : ''}}">
                            {!! Form::label('context', 'context', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('context', 'context=trunkinbound', ['class' => 'form-control', 'id' => 'context', 'placeholder' => 'Enter context (Example: context=trunkinbound)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('context') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('qualify') ? 'has-error' : ''}}">
                            {!! Form::label('qualify', 'qualify', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('qualify', 'qualify=yes', ['class' => 'form-control', 'id' => 'qualify', 'placeholder' => 'Enter qualify (Example: qualify=yes)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('qualify') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('insecure') ? 'has-error' : ''}}">
                            {!! Form::label('insecure', 'insecure', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('insecure', 'insecure=port,invite', ['class' => 'form-control', 'id' => 'insecure', 'placeholder' => 'Enter insecure (Example: insecure=port,invite)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('insecure') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('nat') ? 'has-error' : ''}}">
                            {!! Form::label('nat', 'nat', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('nat', 'nat=force_rport,comedia', ['class' => 'form-control', 'id' => 'nat', 'placeholder' => 'Enter nat (Example: nat=force_rport,comedia)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('nat') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('host') ? 'has-error' : ''}}">
                            {!! Form::label('host', 'host', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('host', null, ['class' => 'form-control', 'id' => 'host', 'placeholder' => 'Enter host (Example: host=202.51.179.237)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('host') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                            {!! Form::label('username', 'username', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'Enter username (Example: username=9610100333)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('username') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('secret') ? 'has-error' : ''}}">
                            {!! Form::label('secret', 'secret', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('secret', null, ['class' => 'form-control', 'id' => 'secret', 'placeholder' => 'Enter secret (Example: secret=56832a5896b)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('secret') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('gsmallow') ? 'has-error' : ''}}">
                            {!! Form::label('gsmallow', 'gsmallow', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('gsmallow', 'allow=gsm', ['class' => 'form-control', 'id' => 'gsmallow', 'placeholder' => 'Enter gsmallow (Example: allow=gsm)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('gsmallow') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('alawallow') ? 'has-error' : ''}}">
                            {!! Form::label('alawallow', 'alawallow', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('alawallow', 'allow=alaw', ['class' => 'form-control', 'id' => 'alawallow (Example: allow=alaw)', 'placeholder' => 'Enter alawallow', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('alawallow') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('ulawallow') ? 'has-error' : ''}}">
                            {!! Form::label('ulawallow', 'ulawallow', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('ulawallow', 'allow=ulaw', ['class' => 'form-control', 'id' => 'ulawallow', 'placeholder' => 'Enter ulawallow (Example: allow=ulaw)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('ulawallow') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="thumbnail">
                        <div class="text-center bg-danger"><b><i>Dialplan Entry</i></b></div>

                        <div class="required form-group {{ $errors->has('AGIexten') ? 'has-error' : ''}}">
                            {!! Form::label('AGIexten', 'AGIexten', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('AGIexten', 'exten => _33X.,1,AGI(agi://127.0.0.1:4577/call_log)', ['class' => 'form-control', 'id' => 'AGIexten', 'placeholder' => 'Enter AGIexten (Example: exten => _33X.,1,AGI(agi://127.0.0.1:4577/call_log) )', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('AGIexten') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('SETexten') ? 'has-error' : ''}}">
                            {!! Form::label('SETexten', 'SETexten', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('SETexten', 'exten => _33X.,n,SET(CALLERID(num)=09610100333)', ['class' => 'form-control', 'id' => 'SETexten', 'placeholder' => 'Enter SETexten (Example: exten => _33X.,n,SET(CALLERID(num)=09610100333) )', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('SETexten') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('Dialexten') ? 'has-error' : ''}}">
                            {!! Form::label('Dialexten', 'Dialexten', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('Dialexten', 'exten => _33X.,n,Dial(SIP/${EXTEN:2}@RND333,,tTo)', ['class' => 'form-control', 'id' => 'Dialexten', 'placeholder' => 'Enter Dialexten (Example: exten => _33X.,n,Dial(SIP/${EXTEN:2}@RND333,,tTo) )', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('Dialexten') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="required form-group {{ $errors->has('Hangupexten') ? 'has-error' : ''}}">
                            {!! Form::label('Hangupexten', 'Hangupexten', ['class' => 'col-xs-3 col-sm-3 control-label']) !!}
                            <div class="col-xs-9 col-sm-9">
                                <div class="col-xs-12 col-sm-12">
                                    {!! Form::text('Hangupexten', 'exten => _33X.,n,Hangup', ['class' => 'form-control', 'id' => 'Hangupexten', 'placeholder' => 'Enter Hangupexten (Example: exten => _33X.,n,Hangup)', 'autocomplete' => 'off']) !!}
                                    <span class="text-danger">
                                        {{ $errors->first('Hangupexten') }}
                                    </span>
                                </div>
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
                                    <h3>Do you want to <b><mark>Create Carrier</mark></b>?</h3>
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
