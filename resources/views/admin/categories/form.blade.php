<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Name RU</label>
    <input type="text" name="ru_name" required="required" class="form-control" value="@isset($category) {{ $category->translate('ru')->name }} @endisset ">
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Name BY</label>
    <input type="text" name="by_name" required class="form-control" value="@isset($category) {{ $category->translate('by')->name }} @endisset ">
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Name EN</label>
    <input type="text" name="en_name" required class="form-control" value="@isset($category) {{ $category->translate('en')->name }} @endisset ">
</div>



<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Description RU</label>
    <textarea name="ru_description" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($category) {{ $category->translate('ru')->description }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Description BY</label>
    <textarea name="by_description" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($category) {{ $category->translate('by')->description }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Description EN</label>
    <textarea name="en_description" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($category) {{ $category->translate('en')->description }} @endisset 
    </textarea>
</div>

<div class="form-group{{ $errors->has('icon') ? 'has-error' : ''}}">
    {!! Form::label('icon', 'Icon', ['class' => 'control-label']) !!}
    @if(isset($category))
    <input type="file" name="new_icon" class="form-control" >
    <img src="/images/categories/{{ $category->icon }}" width="50" height="50" alt="">
    <input type="hidden" value="{{ $category->icon }}" name="last_icon">
    @else
     <input type="file" name="icon"  class="form-control" >
    @endif
   
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
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
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
