@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">История компании</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/histories/create') }}" class="btn btn-success btn-sm" title="Add New History">
                            <i class="fa fa-plus" aria-hidden="true"></i> Добавить
                        </a>
                            <hr>
                        {!! Form::open(['method' => 'GET', 'url' => '/admin/histories', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>Год</th>
                                        <th>Фото</th>
                                      
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($histories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration  }}</td>
                                        <td>{{ $item->year }}</td>
                                        <td><img src="/images/histories/{{ $item->image }}" width="100" alt=""></td>
                                       
                                        <td>
                                            <a href="{{ url('/admin/histories/' . $item->id) }}" title="View History"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/histories/' . $item->id . '/edit') }}" title="Edit History"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/histories', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete History',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $histories->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
