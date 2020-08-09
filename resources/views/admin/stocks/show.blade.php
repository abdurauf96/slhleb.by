@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Акция  {{ $stock->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/stocks') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/stocks/' . $stock->id . '/edit') }}" title="Edit Stock"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/stocks', $stock->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Stock',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $stock->id }}</td>
                                    </tr>
                                    <tr><th> Тип </th><td> {{ $stock->type }} </td></tr>
                                    <tr><th> Фото </th><td> <img src="/images/stocks/{{ $stock->image }}" width="100" height="80" alt="">  </td></tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $stock->title_ru }} </td></tr>
                                    <tr><th> Заголовок BY </th><td> {{ $stock->title_by }} </td></tr>
                                    <tr><th> Заголовок EN </th><td> {{ $stock->title_en }} </td></tr>
                                    <tr><th> Содержимое Ru </th><td> {!! $stock->body_ru !!} </td></tr>
                                    <tr><th> Содержимое BY </th><td> {!! $stock->body_by !!} </td></tr>
                                    <tr><th> Содержимое EN </th><td> {!! $stock->body_en !!} </td></tr>
                                    <tr><th> Фото фона </th><td> <img src="/images/stocks/{{ $stock->image_fon }}" width="100" height="80" alt=""> </td></tr>
                                    @if($stock->type=='competition')
                                    <tr><th> Условия конкурса </th><td> <a href="/images/stocks/{{ $stock->rules }}">скачать</a> </td></tr>
                                    <tr><th> Положение  </th><td> <a href="/images/stocks/{{ $stock->state }}">скачать</a>  </td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
