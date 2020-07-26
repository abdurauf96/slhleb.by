@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">История компании {{ $history->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/histories') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/histories/' . $history->id . '/edit') }}" title="Edit History"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/histories', $history->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete History',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $history->id }}</td>
                                    </tr>
                                    <tr><th> Год </th><td> {{ $history->year }} </td></tr>
                                    <tr><th> Фото </th><td> {{ $history->image }} </td></tr>
                                    <tr><th> Cодержание RU </th><td> {{ $history->body_ru }} </td></tr>
                                    <tr><th> Cодержание BY </th><td> {{ $history->body_by }} </td></tr>
                                    <tr><th> Cодержание EN </th><td> {{ $history->body_en }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
