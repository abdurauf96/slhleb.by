@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Рецепты</h3>
                <div class="add-btn">
                    <a href="{{ url('/admin/recipes/create') }}" class="btn btn-success " title="Add New Product">
                    <i class="fa fa-plus" aria-hidden="true"></i> Добавить
                    </a>
                </div>
            </div><!-- /.box-header -->
            
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                
                    <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th>№</th>
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
            
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
  </div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(function () {
      $("#example1").dataTable();
    })
</script>
@endsection
