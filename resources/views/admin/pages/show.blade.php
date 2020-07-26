@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Страница {{ $page->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/pages') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/pages/' . $page->id . '/edit') }}" title="Edit Page"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pages', $page->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Page',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $page->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Заголовок RU </th><td> {{ $page->title_ru }} </td>
                                    </tr>
                                    <tr>
                                        <th> Заголовок BY </th><td> {{ $page->title_by }} </td>
                                    </tr>
                                    <tr><th> Заголовок EN </th><td> {{ $page->title_en }} </td></tr>
                                    <tr>
                                        <th> Описание RU </th><td> {{ $page->desc_ru }} </td>
                                    </tr>
                                    <tr>
                                        <th> Описание BY </th><td> {{ $page->desc_by }} </td>
                                    </tr>
                                    <tr><th> Описание EN </th><td> {{ $page->desc_en }} </td></tr>
                                    <tr>
                                        <th> Контент RU </th><td> {{ $page->content_ru }} </td>
                                    </tr>
                                    <tr>
                                        <th> Контент BY </th><td> {{ $page->content_by }} </td>
                                    </tr>
                                    <tr><th> Контент EN </th><td> {{ $page->content_en }} </td></tr>
                                    <tr><th> ФОТО Страницы </th><td> <img src="/images/pages/{{ $page->image }}" width="100" height="70" alt=""></td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
