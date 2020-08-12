<div class="form-group{{ $errors->has('tag_id') ? 'has-error' : ''}}">
    {!! Form::label('tag_id', 'Тег', ['class' => 'control-label']) !!}
   <select required name="tag_id" id="" class="form-control">
       @foreach ($tags as $item)
       <option @if($formMode=='edit') {{ $recipe->tag_id==$item->id ? 'selected' : '' }} @endif value="{{ $item->id }}">{{ $item->name_ru }}</option>
       @endforeach
   </select>
</div>
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
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    {!! Form::label('name_en', 'Название En', ['class' => 'control-label']) !!}
    {!! Form::text('name_en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('consist_ru') ? 'has-error' : ''}}">
    {!! Form::label('consist_ru', 'Ингредиенты Ru', ['class' => 'control-label']) !!}
    {!! Form::textarea('consist_ru', null, ['id'=>'recipeContent1'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('consist_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('consist_by') ? 'has-error' : ''}}">
    {!! Form::label('consist_by', 'Ингредиенты By', ['class' => 'control-label']) !!}
    {!! Form::textarea('consist_by', null, ['id'=>'recipeContent2'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('consist_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('consist_en') ? 'has-error' : ''}}">
    {!! Form::label('consist_en', 'Ингредиенты En', ['class' => 'control-label']) !!}
    {!! Form::textarea('consist_en', null, ['id'=>'recipeContent3'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('consist_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('time', 'Время готовления', ['class' => 'control-label']) !!}
    {!! Form::text('time', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    
    {!! Form::label('image', 'Фото', ['class' => 'control-label']) !!}
    <br>
    @if($formMode === 'edit')
    <img src="/images/recipes/{{ $recipe->image }}" height="80" width="100" alt="">
    @endif
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Фото для фона', ['class' => 'control-label']) !!}
    <br>
    @if($formMode === 'edit')
    <img src="/images/recipes/{{ $recipe->image_fon }}" height="80" width="100" alt="">
    @endif
    {!! Form::file('image_fon', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="">Для главной страницы</label>
    <input type="checkbox" name="status" value="1" >
</div>
<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
