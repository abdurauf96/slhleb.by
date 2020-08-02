<div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
    {!! Form::label('name_ru', 'Название Ru', ['class' => 'control-label']) !!}
    {!! Form::text('name_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_by') ? 'has-error' : ''}}">
    {!! Form::label('name_by', 'Название By', ['class' => 'control-label']) !!}
    {!! Form::text('name_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_by') ? 'has-error' : ''}}">
    {!! Form::label('name_by', 'Название EN', ['class' => 'control-label']) !!}
    {!! Form::text('name_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name_by', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
