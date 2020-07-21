<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
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
    {!! $errors->first('icon', '<p class="help-block">:message</p>') !!}
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
