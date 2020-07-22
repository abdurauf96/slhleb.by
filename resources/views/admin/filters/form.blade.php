<div class="form-group{{ $errors->has('category_id') ? 'has-error' : ''}}">
    {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
    <select name="category_id" class="form-control" id="">
    	@foreach($categories as $category)
    	<option @if($formMode=='edit') {{ $filter->category_id==$category->id ? 'selected' : '' }} @endif value="{{ $category->id }}">{{ $category->name }}</option>
    	@endforeach
    </select>
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Name RU</label>
    <input type="text" name="name:ru" required="required" class="form-control" value="@isset($filter) {{ $filter->translate('ru')->name }} @endisset ">
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Name BY</label>
    <input type="text" name="name:by" required class="form-control" value="@isset($filter) {{ $filter->translate('by')->name }} @endisset ">
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Name EN</label>
    <input type="text" name="name:en" required class="form-control" value="@isset($filter) {{ $filter->translate('en')->name }} @endisset ">
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
