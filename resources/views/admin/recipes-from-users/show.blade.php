@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">RecipesFromUser {{ $recipesfromuser->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/recipes-from-users') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/recipes-from-users/' . $recipesfromuser->id . '/edit') }}" title="Edit RecipesFromUser"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/recipesfromusers', $recipesfromuser->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete RecipesFromUser',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $recipesfromuser->id }}</td>
                                    </tr>
                                    <tr><th> Имя </th><td> {{ $recipesfromuser->name }} </td></tr>
                                    <tr><th> Телефон </th><td> {{ $recipesfromuser->phone }} </td></tr>
                                    <tr><th> Email </th><td> {{ $recipesfromuser->email }} </td></tr>
                                    <tr><th> Сообщение </th><td> {{ $recipesfromuser->msg }} </td></tr>
                                    <tr><th> Файл </th><td><img src="/files/users/recipes/{{ $recipesfromuser->file }}" style="width:350px;">  </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
