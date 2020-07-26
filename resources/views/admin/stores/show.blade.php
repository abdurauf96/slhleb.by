@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Store {{ $store->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/stores') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/stores/' . $store->id . '/edit') }}" title="Edit Store"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/stores', $store->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Store',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $store->id }}</td>
                                    </tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $store->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $store->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $store->title_en }} </td></tr>
                                    <tr><th> Контент Ru </th><td> {{ $store->content_ru }} </td></tr>
                                    <tr><th> Контент By </th><td> {{ $store->content_by }} </td></tr>
                                    <tr><th> Контент En </th><td> {{ $store->content_en }} </td></tr>
                                    <tr><th> Фото  </th><td> <img src="/images/stores/{{ $store->image }}" alt="" width="50" height="50"></td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
