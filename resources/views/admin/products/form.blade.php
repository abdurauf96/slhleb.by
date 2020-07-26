<div class="form-group{{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">Категория продукта</label>
    <select name="category_id" class="form-control" id="">
    	@foreach($categories as $category)
    	<option @if($formMode=='edit') {{ $product->category_id==$category->id ? 'selected' : '' }} @endif value="{{ $category->id }}">{{ $category->name }}</option>
    	@endforeach
    </select>
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('filter_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">Фильтр</label>
    <select name="filter_id" class="form-control" id="">
    	@foreach($filters as $filter)
    	<option @if($formMode=='edit') {{ $product->filter_id==$filter->id ? 'selected' : '' }} @endif value="{{ $filter->id }}">{{ $filter->name }}</option>
    	@endforeach
    </select>
    {!! $errors->first('filter_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Название RU</label>
    <input type="text" name="name_ru" required="required" class="form-control" value="@isset($product) {{ $product->translate('ru')->name }} @endisset ">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Название BY</label>
    <input type="text" name="name_by" required="required" class="form-control" value="@isset($product) {{ $product->translate('by')->name }} @endisset ">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Название EN</label>
    <input type="text" name="name_en" required="required" class="form-control" value="@isset($product) {{ $product->translate('en')->name }} @endisset ">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>





<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Описание RU</label>
    <textarea name="description_ru" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('ru')->description }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('about') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Описание BY</label>
    <textarea name="description_by" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('by')->description }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('about') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Описание EN</label>
    <textarea name="description_en" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('en')->description }} @endisset 
    </textarea>
</div>

<div class="form-group{{ $errors->has('about') ? 'has-error' : ''}}">
    <label class="control-label" for="name">О продукте RU</label>
    <textarea name="about_ru" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('ru')->about }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('about') ? 'has-error' : ''}}">
    <label class="control-label" for="name">О продукте BY</label>
    <textarea name="about_by" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('by')->about }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('about') ? 'has-error' : ''}}">
    <label class="control-label" for="name">О продукте EN</label>
    <textarea name="about_en" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('en')->about }} @endisset 
    </textarea>
</div>

<div class="form-group{{ $errors->has('consist') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Состав продукта RU</label>
    <textarea name="consist_ru" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('ru')->consist }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('consist') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Состав продукта BY</label>
    <textarea name="consist_by" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('by')->consist }} @endisset 
    </textarea>
</div>
<div class="form-group{{ $errors->has('consist') ? 'has-error' : ''}}">
    <label class="control-label" for="name">Состав продукта EN</label>
    <textarea name="consist_en" id="" cols="50" rows="10" class="form-control" required="required">
        @isset($product) {{ $product->translate('en')->consist }} @endisset 
    </textarea>
</div>



<div class="form-group{{ $errors->has('protein') ? 'has-error' : ''}}">
    {!! Form::label('protein', 'Белков', ['class' => 'control-label']) !!}
    {!! Form::text('protein', null,   ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('protein', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('carbo') ? 'has-error' : ''}}">
    {!! Form::label('carbo', 'Углеводов', ['class' => 'control-label']) !!}
    {!! Form::text('carbo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('carbo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('fat') ? 'has-error' : ''}}">
    {!! Form::label('fat', 'Жиров', ['class' => 'control-label']) !!}
    {!! Form::text('fat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('callory') ? 'has-error' : ''}}">
    {!! Form::label('callory', 'Каллория продукта', ['class' => 'control-label']) !!}
    {!! Form::text('callory', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('callory', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="" class="control-label">Фото</label>
    @if($formMode=='edit')
    <img src="/images/products/{{ $product->image }}" width="50" height="50" alt="">
    <input type="hidden" name="last_img" value="{{ $product->image }}" class="form-control" >
    <input type="file" name="new_img" class="form-control" >
    @else
    <input type="file" name="img" class="form-control" >
    @endif
</div>
<div class="form-group{{ $errors->has('images') ? 'has-error' : ''}}">
    <label for="" class="control-label">Фото продукта для слайдера (можно прикрепить более одного)</label>
    @if($formMode=='edit')
    @php
        $images=json_decode($product->images)
    @endphp
    @if(!empty($images))

    @foreach ($images as $image)
        <img src="/images/products/{{ $image }}" width="50" height="50" alt="">
    @endforeach
    @endif
    <input type="hidden" name="last_images" value="{{ $product->images }}" class="form-control" >
    <input type="file" name="new_images[]" multiple class="form-control" >
    @else
    <input type="file" name="images[]" multiple class="form-control" >
    @endif
</div>
<div class="form-group{{ $errors->has('image_in') ? 'has-error' : ''}}">
    {!! Form::label('image_in', 'Внутренний вид продукта', ['class' => 'control-label']) !!}
    @if($formMode=='edit')
    <img src="/images/products/{{ $product->image_in }}" width="50" height="50" alt="">
    <input type="file" name="new_image_in"  class="form-control" >
    <input type="hidden" name="last_image_in" value="{{ $product->image_in }}"  class="form-control" >
    @else
    <input type="file" name="image_in"  class="form-control" >
    @endif
    {!! $errors->first('image_in', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image_out') ? 'has-error' : ''}}">
    {!! Form::label('image_out', 'Внешний вид продукта', ['class' => 'control-label']) !!}
    @if($formMode=='edit')
    <img src="/images/products/{{ $product->image_out }}" width="50" height="50" alt="">
    <input type="file" name="new_image_out"  class="form-control" >
    <input type="hidden" name="last_image_out" value="{{ $product->image_out }}"  class="form-control" >
    @else
    <input type="file" name="image_out"  class="form-control" >
    @endif
    {!! $errors->first('image_out', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('weight') ? 'has-error' : ''}}">
    {!! Form::label('weight', 'Вес (Шт)', ['class' => 'control-label']) !!}
    {!! Form::text('weight', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
