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
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Баннер', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="">Тип</label> <br>
    Хит <input type="radio" value="xit" @if($formMode === 'edit')  {{ $homebanner->type=='xit' ? 'checked' : '' }} @endif name="type">
    Новинка <input type="radio" value="new" @if($formMode === 'edit') {{ $homebanner->type=='new' ? 'checked' : '' }} @endif name="type">
 </div>
<div class="form-group{{ $errors->has('url') ? 'has-error' : ''}}">
    {!! Form::label('url', 'Ссылка', ['class' => 'control-label']) !!}
    {!! Form::text('url', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
