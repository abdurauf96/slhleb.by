<div class="form-group{{ $errors->has('sertificat') ? 'has-error' : ''}}">
    {!! Form::label('sertificat', 'Сертификат', ['class' => 'control-label']) !!}
    {!! Form::file('sertificat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('sertificat', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
