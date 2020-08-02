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
    {!! Form::text('desc_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('desc_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('desc_by') ? 'has-error' : ''}}">
    {!! Form::label('desc_by', 'Описание By', ['class' => 'control-label']) !!}
    {!! Form::text('desc_by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('desc_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('desc_en') ? 'has-error' : ''}}">
    {!! Form::label('desc_en', 'Описание En', ['class' => 'control-label']) !!}
    {!! Form::text('desc_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image_fon') ? 'has-error' : ''}}">
    {!! Form::label('image_fon', 'фото для фона ', ['class' => 'control-label']) !!}
    {!! Form::file('image_fon', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image_fon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image_effekt') ? 'has-error' : ''}}">
    {!! Form::label('image_effekt', 'Фото для колосока', ['class' => 'control-label']) !!}
    {!! Form::file('image_effekt', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image_effekt', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
