@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Баннер {{ $homebanner->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/home-banners') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/home-banners/' . $homebanner->id . '/edit') }}" title="Edit HomeBanner"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/homebanners', $homebanner->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete HomeBanner',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $homebanner->id }}</td>
                                    </tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $homebanner->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $homebanner->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $homebanner->title_en }} </td></tr>
                                    <tr><th> Баннер </th><td>  <img src="/images/homebanners/{{ $homebanner->image }}" width="80" height="100" alt=""></td></tr>
                                    <tr><th>Тип </th><td> 
                                        @if($homebanner->type=='xit') <img src="/frontend/images/hit.png" width="80" height="100" alt=""> @else <img src="/frontend/images/new.png" width="80" height="100" alt="">  @endif </td></tr>
                                    <tr><th> Ссылка  </th><td> {{ $homebanner->url }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
