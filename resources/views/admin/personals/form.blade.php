<div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
    {!! Form::label('name_ru', 'Name Ru', ['class' => 'control-label']) !!}
    {!! Form::text('name_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_by') ? 'has-error' : ''}}">
    {!! Form::label('name_by', 'Name By', ['class' => 'control-label']) !!}
    {!! Form::text('name_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    {!! Form::label('name_en', 'Name En', ['class' => 'control-label']) !!}
    {!! Form::text('name_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_ru') ? 'has-error' : ''}}">
    {!! Form::label('position_ru', 'Position Ru', ['class' => 'control-label']) !!}
    {!! Form::text('position_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('position_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_by') ? 'has-error' : ''}}">
    {!! Form::label('position_by', 'Position By', ['class' => 'control-label']) !!}
    {!! Form::text('position_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('position_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_en') ? 'has-error' : ''}}">
    {!! Form::label('position_en', 'Position En', ['class' => 'control-label']) !!}
    {!! Form::text('position_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('position_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', 'Phone', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time_ru') ? 'has-error' : ''}}">
    {!! Form::label('work_time_ru', 'Work Time Ru', ['class' => 'control-label']) !!}
    {!! Form::text('work_time_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time_by') ? 'has-error' : ''}}">
    {!! Form::label('work_time_by', 'Work Time By', ['class' => 'control-label']) !!}
    {!! Form::text('work_time_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time_en') ? 'has-error' : ''}}">
    {!! Form::label('work_time_en', 'Work Time En', ['class' => 'control-label']) !!}
    {!! Form::text('work_time_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time_en', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
