<div class="form-group{{ $errors->has('year') ? 'has-error' : ''}}">
    {!! Form::label('year', 'Год', ['class' => 'control-label']) !!}
    {!! Form::text('year', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Фото', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('body', 'Cодержание RU', ['class' => 'control-label']) !!}
    {!! Form::textarea('body_ru', null, ['id'=>'historyContent1'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('body', 'Cодержание BY', ['class' => 'control-label']) !!}
    {!! Form::textarea('body_by', null, ['id'=>'historyContent2'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('body', 'Cодержание EN', ['class' => 'control-label']) !!}
    {!! Form::textarea('body_en', null, ['id'=>'historyContent3'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
