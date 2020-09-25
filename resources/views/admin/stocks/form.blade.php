<div class="form-group{{ $errors->has('type') ? 'has-error' : ''}}">
    {!! Form::label('type', 'Тип', ['class' => 'control-label']) !!}
    <input type="radio" class="stock-type" @if($formMode === 'edit')  {{ $stock->type=='stock' ? 'checked': '' }} @endif  value="stock"  name="type">Акция
    <input type="radio" class="stock-type"  @if($formMode === 'edit') {{ $stock->type=='competition' ? 'checked': '' }} @endif  value="competition" name="type">Конкурс
</div>
<div class="form-group rules-block  @if($formMode === 'edit')  {{ $stock->type=='competition' ? '': 'rules-block-hidden' }} @endif {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Условия конкурса', ['class' => 'control-label']) !!}
    {!! Form::file('rules', null,  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group  rules-block  @if($formMode === 'edit')  {{ $stock->type=='competition' ? '': 'rules-block-hidden' }} @endif  {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Положение', ['class' => 'control-label']) !!}
    {!! Form::file('state', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    {!! Form::label('title_ru', 'Заголовок Ru', ['class' => 'control-label']) !!}
    {!! Form::text('title_ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'id'=>'title']) !!}
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
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    {!! Form::label('body_ru', 'Содержимое Ru', ['class' => 'control-label']) !!}
    {!! Form::textarea('body_ru', null, ['id'=>'stockContent1'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_by') ? 'has-error' : ''}}">
    {!! Form::label('body_by', 'Содержимое By', ['class' => 'control-label']) !!}
    {!! Form::textarea('body_by', null, ['id'=>'stockContent2'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('body_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    {!! Form::label('body_en', 'Содержимое En', ['class' => 'control-label']) !!}
    {!! Form::textarea('body_en', null, ['id'=>'stockContent3'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Фото (отображается на карточке)', ['class' => 'control-label']) !!}
    <br>
    @if($formMode === 'edit')
    <img src="/images/stocks/{{ $stock->image }}" width="100" height="80" alt="">
    @endif
    {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Фото (отображается на странице подробного чтения)', ['class' => 'control-label']) !!}
    <br>
    @if($formMode === 'edit')
    <img src="/images/stocks/{{ $stock->image_fon }}" width="100" height="80" alt="">
    @endif
    {!! Form::file('image_fon', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('date', 'Дата', ['class' => 'control-label']) !!}
    {!! Form::date('date', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::label('meta_title', ' SEO Заголовок', ['class' => 'control-label']) !!}
    {!! Form::textarea('meta_title', null, ['rows'=>3, 'class'=>'form-control'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('meta_title', ' SEO Описание', ['class' => 'control-label']) !!}
    {!! Form::textarea('meta_description', null, ['rows'=>3, 'class'=>'form-control'], ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug', ['class' => 'control-label']) !!}
    {!! Form::text('slug', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'id'=>'slug']) !!}
</div>
<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Обновить' : 'Создать', ['class' => 'btn btn-primary']) !!}
</div>
