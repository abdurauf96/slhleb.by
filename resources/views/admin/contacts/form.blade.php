<div class="form-group{{ $errors->has('addres') ? 'has-error' : ''}}">
    {!! Form::label('addres', 'Addres RU', ['class' => 'control-label']) !!}
    {!! Form::text('addres_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('addres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres') ? 'has-error' : ''}}">
    {!! Form::label('addres', 'Addres BY', ['class' => 'control-label']) !!}
    {!! Form::text('addres_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('addres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres') ? 'has-error' : ''}}">
    {!! Form::label('addres', 'Addres EN', ['class' => 'control-label']) !!}
    {!! Form::text('addres_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('addres', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('email_addres') ? 'has-error' : ''}}">
    {!! Form::label('email_addres', 'Email Addres', ['class' => 'control-label']) !!}
    {!! Form::text('email_addres', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email_addres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('unn') ? 'has-error' : ''}}">
    {!! Form::label('unn', 'Unn', ['class' => 'control-label']) !!}
    {!! Form::text('unn', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('unn', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('okpo') ? 'has-error' : ''}}">
    {!! Form::label('okpo', 'Okpo', ['class' => 'control-label']) !!}
    {!! Form::text('okpo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('okpo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', 'Phone', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('schot') ? 'has-error' : ''}}">
    {!! Form::label('schot', 'Schot', ['class' => 'control-label']) !!}
    {!! Form::text('schot', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('schot', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('kod') ? 'has-error' : ''}}">
    {!! Form::label('kod', 'Kod', ['class' => 'control-label']) !!}
    {!! Form::text('kod', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('kod', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bank') ? 'has-error' : ''}}">
    {!! Form::label('bank', 'Bank RU', ['class' => 'control-label']) !!}
    {!! Form::text('bank_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bank') ? 'has-error' : ''}}">
    {!! Form::label('bank', 'Bank BY', ['class' => 'control-label']) !!}
    {!! Form::text('bank_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bank') ? 'has-error' : ''}}">
    {!! Form::label('bank', 'Bank EN', ['class' => 'control-label']) !!}
    {!! Form::text('bank_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    {!! Form::label('work_time', 'Work Time RU', ['class' => 'control-label']) !!}
    {!! Form::textarea('work_time_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    {!! Form::label('work_time', 'Work Time BY', ['class' => 'control-label']) !!}
    {!! Form::textarea('work_time_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    {!! Form::label('work_time', 'Work Time EN', ['class' => 'control-label']) !!}
    {!! Form::textarea('work_time_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
