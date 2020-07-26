@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Новость {{ $post->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/posts/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/posts', $post->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Post',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $post->id }}</td>
                                    </tr>
                                    <tr><th>Фото </th><td> <img src="/images/posts/{{ $post->image }}" width="100"  height="80" alt=""> </td></tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $post->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $post->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $post->title_en }} </td></tr>
                                    <tr><th> Заголовок Ru </th><td> {!! $post->body_ru !!} </td></tr>
                                    <tr><th> Заголовок By </th><td> {!! $post->body_by !!} </td></tr>
                                    <tr><th> Заголовок En </th><td> {!! $post->body_en !!} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
