@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Рецепт {{ $recipe->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/recipes') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/recipes/' . $recipe->id . '/edit') }}" title="Edit Recipe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/recipes', $recipe->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Recipe',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $recipe->id }}</td>
                                    </tr>
                                    <tr><th> Тег </th><td> {{ $recipe->tag->name_ru }} </td></tr>
                                    <tr><th> Название Ru </th><td> {{ $recipe->name_ru }} </td></tr>
                                    <tr><th> Название By </th><td> {{ $recipe->name_by }} </td></tr>
                                    <tr><th> Название EN </th><td> {{ $recipe->name_en }} </td></tr>
                                    <tr><th> Фото </th><td> <img src="/images/recipes/{{ $recipe->image }} " width="150" height="80" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
