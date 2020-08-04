<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    {!! Form::label('title_ru', 'Заголовок Ru', ['class' => 'control-label']) !!}
    {!! Form::text('title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_by') ? 'has-error' : ''}}">
    {!! Form::label('title_by', 'Заголовок By', ['class' => 'control-label']) !!}
    {!! Form::text('title_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    {!! Form::label('title_en', 'Заголовок En', ['class' => 'control-label']) !!}
    {!! Form::text('title_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('desc_ru') ? 'has-error' : ''}}">
    {!! Form::label('desc_ru', 'Описание Ru', ['class' => 'control-label']) !!}
    {!! Form::textarea('desc_ru', null, ['rows'=>3, 'class'=>'form-control'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('desc_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('desc_by') ? 'has-error' : ''}}">
    {!! Form::label('desc_by', 'Описание By', ['class' => 'control-label']) !!}
    {!! Form::textarea('desc_by', null, ['rows'=>3, 'class'=>'form-control'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('desc_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('desc_en') ? 'has-error' : ''}}">
    {!! Form::label('desc_en', 'Описание En', ['class' => 'control-label']) !!}
    {!! Form::textarea('desc_en', null, ['rows'=>3, 'class'=>'form-control'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content_ru') ? 'has-error' : ''}}">
    {!! Form::label('content_ru', 'Содержимое Ru', ['class' => 'control-label']) !!}
    {!! Form::textarea('content_ru', null, ['id'=>'pageContent1'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('content_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content_by') ? 'has-error' : ''}}">
    {!! Form::label('content_by', 'Содержимое By', ['class' => 'control-label']) !!}
    {!! Form::textarea('content_by', null, ['id'=>'pageContent2'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('content_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content_en') ? 'has-error' : ''}}">
    {!! Form::label('content_en', 'Содержимое En', ['class' => 'control-label']) !!}
    {!! Form::textarea('content_en', null, ['id'=>'pageContent3'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('content_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Фото', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>

@if(Auth::user()->hasRole('admin'))
<div class="form-group{{ $errors->has('key') ? 'has-error' : ''}}">
    {!! Form::label('key', 'URL(ссылка)', ['class' => 'control-label']) !!}
    {!! Form::text('key', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('key', '<p class="help-block">:message</p>') !!}
</div>
@endif

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
