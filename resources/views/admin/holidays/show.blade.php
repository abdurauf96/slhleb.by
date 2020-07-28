@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Праздник {{ $holiday->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/holidays') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/holidays/' . $holiday->id . '/edit') }}" title="Edit Holiday"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/holidays', $holiday->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Holiday',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $holiday->id }}</td>
                                    </tr>
                                    <tr><th> Сценарий </th><td> {{ $holiday->script->name_ru }} </td></tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $holiday->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $holiday->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $holiday->title_en }} </td></tr>
                                    <tr><th> Содержимое Ru </th><td> {!! $holiday->body_ru !!} </td></tr>
                                    <tr><th> Содержимое By </th><td> {!! $holiday->body_by !!} </td></tr>
                                    <tr><th> Содержимое En </th><td> {!! $holiday->body_en !!} </td></tr>
                                    <tr><th> Фото  </th><td> <img src="/images/holidays/{{  $holiday->image }}" alt="" width="100" height="80">  </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
