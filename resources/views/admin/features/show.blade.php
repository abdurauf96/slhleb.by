@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Feature {{ $feature->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/features') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/features/' . $feature->id . '/edit') }}" title="Edit Feature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/features', $feature->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Feature',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $feature->id }}</td>
                                    </tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $feature->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $feature->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $feature->title_en }} </td></tr>
                                    <tr><th> Фото  </th><td> <img src="/images/features/{{ $feature->image }}" width="50" height="50" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
