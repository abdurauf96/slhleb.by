@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h3>Конкурсы</h3></div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                    
                                        <th>Заголовок </th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($competitions as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                     
                                        <td>{{ $item->title_ru }}</td>
                                        
                                        <td>
                                            <a class="btn btn-info" href="/admin/competitions/{{ $item->id }}/add-participant"> <i class="fa fa-plus"></i> Управление участниками</a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                           
                        </div>
                        <div class="card-header"> <h3>Участники</h3> </div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                
                                    <th>Участник </th>
                                    <th>Описание</th>
                                    <th> Конкурс</th>
                                    <th> Место</th>
                                    <th>Фото</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($participants as $part)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                 
                                    <td>{{ $part->name_ru }}</td>
                                    <td>{{ $part->desc_ru }}</td>
                                    <td>{{ $part->competition->title_ru }}</td>
                                    <td>{{ $part->point }}</td>
                                    <td> <img src="/images/competitions/participiants/{{ $part->image }}" width="100" height="80" alt=""> </td>
                                    
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
