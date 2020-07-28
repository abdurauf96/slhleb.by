<div class="form-group{{ $errors->has('addres') ? 'has-error' : ''}}">
    {!! Form::label('addres', 'Адрес RU', ['class' => 'control-label']) !!}
    {!! Form::text('addres_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('addres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres') ? 'has-error' : ''}}">
    {!! Form::label('addres', 'Адрес BY', ['class' => 'control-label']) !!}
    {!! Form::text('addres_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('addres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres') ? 'has-error' : ''}}">
    {!! Form::label('addres', 'Адрес EN', ['class' => 'control-label']) !!}
    {!! Form::text('addres_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('addres', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('email_addres') ? 'has-error' : ''}}">
    {!! Form::label('email_addres', 'Почтовый адрес:', ['class' => 'control-label']) !!}
    {!! Form::text('email_addres', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email_addres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('unn') ? 'has-error' : ''}}">
    {!! Form::label('unn', 'УНН', ['class' => 'control-label']) !!}
    {!! Form::text('unn', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('unn', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('okpo') ? 'has-error' : ''}}">
    {!! Form::label('okpo', 'ОКПО', ['class' => 'control-label']) !!}
    {!! Form::text('okpo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('okpo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', 'Телефон', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('schot') ? 'has-error' : ''}}">
    {!! Form::label('schot', 'Расчетный счет', ['class' => 'control-label']) !!}
    {!! Form::text('schot', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('schot', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('kod') ? 'has-error' : ''}}">
    {!! Form::label('kod', 'Код', ['class' => 'control-label']) !!}
    {!! Form::text('kod', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('kod', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bank') ? 'has-error' : ''}}">
    {!! Form::label('bank', 'Банк RU', ['class' => 'control-label']) !!}
    {!! Form::text('bank_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bank') ? 'has-error' : ''}}">
    {!! Form::label('bank', 'Банк BY', ['class' => 'control-label']) !!}
    {!! Form::text('bank_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bank') ? 'has-error' : ''}}">
    {!! Form::label('bank', 'Банк EN', ['class' => 'control-label']) !!}
    {!! Form::text('bank_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    {!! Form::label('work_time', 'Режим работы: RU', ['class' => 'control-label']) !!}
    {!! Form::textarea('work_time_ru', null, ['rows'=>'3', 'class'=>'form-control'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    {!! Form::label('work_time', 'Режим работы: BY', ['class' => 'control-label']) !!}
    {!! Form::textarea('work_time_by', null, ['rows'=>'3', 'class'=>'form-control'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    {!! Form::label('work_time', 'Режим работы: EN', ['class' => 'control-label']) !!}
    {!! Form::textarea('work_time_en', null, ['rows'=>'3', 'class'=>'form-control'],  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
