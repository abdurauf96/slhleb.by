@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Блок {{ $mainblok->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/main-bloks') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/main-bloks/' . $mainblok->id . '/edit') }}" title="Edit MainBlok"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/mainbloks', $mainblok->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete MainBlok',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mainblok->id }}</td>
                                    </tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $mainblok->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $mainblok->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $mainblok->title_en }} </td></tr>
                                    <tr><th> Фон  </th><td> <img src="/images/bloks/{{ $mainblok->image }}" alt="" width="200"> </td></tr>
                                    <tr><th> Ссылка  </th><td> {{ $mainblok->url }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
