<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Название', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Фото', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('weight') ? 'has-error' : ''}}">
    {!! Form::label('weight', 'Вес', ['class' => 'control-label']) !!}
    {!! Form::text('weight', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('quiz_category_id') ? 'has-error' : ''}}">
    {!! Form::label('tag_id', 'Категория товара', ['class' => 'control-label']) !!}
   <select required name="quiz_category_id" id="" class="form-control">
       @foreach ($categories as $category)
       <option @if($formMode=='edit') {{ $quizproduct->quiz_category_id==$category->id ? 'selected' : '' }} @endif value="{{ $category->id }}">{{ $category->name }}</option>
       @endforeach
   </select>
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
