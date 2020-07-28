@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Заявки</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/appeals/create') }}" class="btn btn-success btn-sm" title="Add New Appeal">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/appeals', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>Тип обрашения</th>
                                        <th>Имя</th>                    
                                        <th>Полное наименование (если юридическое лицо)</th>
                                        <th>Телефон</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($appeals as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> @if($item->type=='yur_lits') обрашение от юридического лица
                                             @elseif($item->type=='fiz_lits') обрашение от физического лица 
                                             @else
                                             обрашение для обратной связи
                                             @endif
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->phone }}</td>
                                        
                                        
                                        <td><a href="/files/{{ $item->file }}">Файл</a> </td>
                                        <td>
                                            <a href="{{ url('/admin/appeals/' . $item->id) }}" title="View Appeal"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/appeals/' . $item->id . '/edit') }}" title="Edit Appeal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/appeals', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Appeal',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $appeals->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection