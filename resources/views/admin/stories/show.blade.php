@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">История {{ $story->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/stories') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/stories/' . $story->id . '/edit') }}" title="Edit Story"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/stories', $story->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Story',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $story->id }}</td>
                                    </tr>
                                    <tr><th> Категория  </th><td> {{ $story->category->name_ru }} </td></tr>
                                    <tr><th> Фото </th><td> <img src="/images/stories/{{ $story->image }}" width="100" height="80" alt=""> </td></tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $story->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $story->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $story->title_en }} </td></tr>
                                    <tr><th> Содержимое Ru </th><td> {!! $story->body_ru !!} </td></tr>
                                    <tr><th> Содержимое By </th><td> {!! $story->body_by !!} </td></tr>
                                    <tr><th> Содержимое En </th><td> {!! $story->body_en !!} </td></tr>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
