@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Магазины</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/stores/create') }}" class="btn btn-success btn-sm" title="Add New Store">
                            <i class="fa fa-plus" aria-hidden="true"></i> Добавить новый
                        </a>
                        <hr>
                        {!! Form::open(['method' => 'GET', 'url' => '/admin/stores', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Поиск..." value="{{ request('search') }}">
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
                                        <th>Заголовок</th>
                                        <th>Контент</th>
                                        <th>Фото</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($stores as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->getTitle() }}</td>
                                        <td>{{ $item->getContent() }}</td>
                                        <td><img src="/images/stores/{{ $item->image }}" alt="" width="50" height="50"></td>
                                        
                                        <td>
                                            <a href="{{ url('/admin/stores/' . $item->id) }}" title="View Store"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/stores/' . $item->id . '/edit') }}" title="Edit Store"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/stores', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Store',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $stores->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
