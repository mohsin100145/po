<div class="form-group required {{ $errors->has('district_id') ? 'has-error' : '' }}">
    {!! Form::label('district_id', 'Select Division Name', ['class' => 'control-label col-sm-3 col-xs-3']) !!}
    <div class="col-xs-9 col-sm-9">
        <div class="col-xs-12 col-sm-12">
            {!! Form::select('district_id', $districtList, null, ['class' => 'form-control', 'placeholder' => 'Select District Name', 'id' => 'district_id']) !!}
            <span class="text-danger">
                {{ $errors->first('district_id') }}
            </span>
        </div>
    </div>
</div>