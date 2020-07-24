<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title RU', 'Title RU', ['class' => 'control-label']) !!}
    {!! Form::text('title:ru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content ', 'Content RU', ['class' => 'control-label']) !!}
    {!! Form::textarea('content:ru', null, ['id'=>'requisiteContent1'],  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title ', 'Title BY', ['class' => 'control-label']) !!}
    {!! Form::text('title:by', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content ', 'Content BY', ['class' => 'control-label']) !!}
    {!! Form::textarea('content:by', null, ['id'=>'requisiteContent2'],  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title ', 'Title EN', ['class' => 'control-label']) !!}
    {!! Form::text('title:en', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content ', 'Content EN ', ['class' => 'control-label']) !!}
    {!! Form::textarea('content:en', null, ['id'=>'requisiteContent3'],  ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
