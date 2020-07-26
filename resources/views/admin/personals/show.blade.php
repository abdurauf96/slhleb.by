@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Сотрудник {{ $personal->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/personals') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/personals/' . $personal->id . '/edit') }}" title="Edit Personal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/personals', $personal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Personal',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $personal->id }}</td>
                                    </tr>
                                    <tr><th> Имя RU </th><td> {{ $personal->name_ru }} </td></tr>
                                    <tr><th> Имя BY </th><td> {{ $personal->name_by }} </td></tr>
                                    <tr><th> Имя En </th><td> {{ $personal->name_en }} </td></tr>
                                    <tr><th> Должность RU </th><td> {{ $personal->position_ru }} </td></tr>
                                    <tr><th> Должность BY </th><td> {{ $personal->position_by }} </td></tr>
                                    <tr><th> Должность En </th><td> {{ $personal->position_en }} </td></tr>
                                    <tr><th> Телефон  </th><td> {{ $personal->phone }} </td></tr>
                                    <tr><th> Email </th><td> {{ $personal->email }} </td></tr>
                                    <tr><th> Режим работы RU </th><td> {{ $personal->work_time_ru }} </td></tr>
                                    <tr><th> Режим работы BY </th><td> {{ $personal->work_time_by }} </td></tr>
                                    <tr><th> Режим работы En </th><td> {{ $personal->work_time_en }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
