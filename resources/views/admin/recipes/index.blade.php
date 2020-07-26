@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Рецепты</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/recipes/create') }}" class="btn btn-success btn-sm" title="Add New Recipe">
                            <i class="fa fa-plus" aria-hidden="true"></i> Добавить
                        </a>
                        <hr>
                        {!! Form::open(['method' => 'GET', 'url' => '/admin/recipes', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                       
                                        <th>Название </th>
                                        <th>Тег</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($recipes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>{{ $item->name_ru }}</td>
                                        <td>{{ $item->tag->name_ru }}</td>
                                        <td>
                                            <a href="{{ url('/admin/recipes/' . $item->id) }}" title="View Recipe"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/recipes/' . $item->id . '/edit') }}" title="Edit Recipe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/recipes', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Recipe',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $recipes->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
