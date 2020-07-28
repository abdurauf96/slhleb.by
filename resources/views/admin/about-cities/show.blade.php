@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"> {{ $aboutcity->title_ru }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/about-cities') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/about-cities/' . $aboutcity->id . '/edit') }}" title="Edit AboutCity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/aboutcities', $aboutcity->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete AboutCity',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $aboutcity->id }}</td>
                                    </tr>
                                    <tr><th> Фото </th><td> <img src="/images/about/{{ $aboutcity->image }}" width="100" height="80" alt=""> </td></tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $aboutcity->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $aboutcity->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $aboutcity->title_en }} </td></tr>
                                    <tr><th> Содержимое Ru </th><td> {!! $aboutcity->body_ru !!} </td></tr>
                                    <tr><th> Содержимое By </th><td> {!! $aboutcity->body_by !!} </td></tr>
                                    <tr><th> Содержимое En </th><td> {!! $aboutcity->body_en !!} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
