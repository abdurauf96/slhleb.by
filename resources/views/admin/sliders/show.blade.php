@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Slider {{ $slider->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/sliders') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/sliders/' . $slider->id . '/edit') }}" title="Edit Slider"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/sliders', $slider->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Slider',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $slider->id }}</td>
                                    </tr>
                                    <tr><th> Заголовок Ru </th><td> {{ $slider->title_ru }} </td></tr>
                                    <tr><th> Заголовок By </th><td> {{ $slider->title_by }} </td></tr>
                                    <tr><th> Заголовок En </th><td> {{ $slider->title_en }} </td></tr>
                                    <tr><th>Описание Ru </th><td> {{ $slider->desc_ru }} </td></tr>
                                    <tr><th>Описание By </th><td> {{ $slider->desc_by }} </td></tr>
                                    <tr><th>Описание En </th><td> {{ $slider->desc_en }} </td></tr>
                                    <tr><th>фон </th><td> <img width="200" src="/images/sliders/{{ $slider->image_fon }}" alt=""> </td></tr>
                                    <tr><th>колосок  </th><td> <img width="200" src="/images/sliders/{{ $slider->image_effekt }}" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
