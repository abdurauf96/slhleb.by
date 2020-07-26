@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Appeal {{ $appeal->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/appeals') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/appeals/' . $appeal->id . '/edit') }}" title="Edit Appeal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/appeals', $appeal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Appeal',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $appeal->id }}</td>
                                    </tr>
                                    <tr><th> Тип обрашения </th><td> {{ $appeal->type }} </td></tr>
                                    <tr><th> Имя </th><td> {{ $appeal->name }} </td></tr>
                                    <tr><th> Адрес </th><td> {{ $appeal->addres }} </td></tr>
                                    <tr><th> Полное наименование (если юридическое лицо) </th><td> {{ $appeal->fullname }} </td></tr>
                                    <tr><th> Телефон </th><td> {{ $appeal->phone }} </td></tr>
                                    <tr><th> Почта </th><td> {{ $appeal->email }} </td></tr>
                                    <tr><th> Текст сообщения </th><td> {{ $appeal->msg }} </td></tr>
                                    <tr><th> Файл </th><td> {{ $appeal->file }} </td></tr>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
