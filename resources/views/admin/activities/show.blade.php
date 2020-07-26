@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Activity {{ $activity->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/activities') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/activities/' . $activity->id . '/edit') }}" title="Edit Activity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/activities', $activity->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Activity',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $activity->id }}</td>
                                    </tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $activity->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $activity->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $activity->title_en }} </td></tr>
                                    <tr><th> Файл </th><td> <a href="/files/activities/{{ $activity->file }}">Загрузить</a> </td></tr>
                                    <tr><th> Формат </th><td> {{ $activity->format }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
