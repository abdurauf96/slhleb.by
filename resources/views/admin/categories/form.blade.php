<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Название RU</label>
    <input type="text" name="ru_name" id="title"required="required" class="form-control" value="@isset($category) {{ $category->translate('ru')->name }} @endisset ">
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Название BY</label>
    <input type="text" name="by_name" required class="form-control" value="@isset($category) {{ $category->translate('by')->name }} @endisset ">
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Название EN</label>
    <input type="text" name="en_name" required class="form-control" value="@isset($category) {{ $category->translate('en')->name }} @endisset ">
</div>



<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Описание RU</label>
    <textarea name="ru_description" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($category) {{ $category->translate('ru')->description }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Описание BY</label>
    <textarea name="by_description" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($category) {{ $category->translate('by')->description }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Описание EN</label>
    <textarea name="en_description" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($category) {{ $category->translate('en')->description }} @endisset 
    </textarea>
</div>

<div class="form-group{{ $errors->has('icon') ? 'has-error' : ''}}">
    {!! Form::label('icon', 'Иконка', ['class' => 'control-label']) !!}
    @if(isset($category))
    <input type="file" name="new_icon" class="form-control" >
    <img src="/images/categories/{{ $category->icon }}" width="50" height="50" alt="">
    <input type="hidden" value="{{ $category->icon }}" name="last_icon">
    @else
     <input type="file" name="icon"  class="form-control" >
    @endif
   
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Фото', ['class' => 'control-label']) !!}
    @if(isset($category))
    <input type="file" name="new_image" class="form-control" >
    <img src="/images/categories/{{ $category->image }}" width="50" height="50" alt="">
    <input type="hidden" value="{{ $category->image }}" name="last_image">
    @else
    <input type="file" name="image" class="form-control" >
    @endif
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug', ['class' => 'control-label']) !!}
    {!! Form::text('slug', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'id'=>'slug']) !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
