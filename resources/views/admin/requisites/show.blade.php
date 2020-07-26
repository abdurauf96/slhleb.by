@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Реквизит {{ $requisite->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/requisites') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/requisites/' . $requisite->id . '/edit') }}" title="Edit Requisite"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/requisites', $requisite->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Requisite',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $requisite->id }}</td>
                                    </tr>
                                    <tr><th> Заголовок RU </th><td> {{ $requisite->translate('ru')->title }} </td></tr>
                                    <tr><th> Заголовок BY </th><td> {{ $requisite->translate('by')->title }} </td></tr>
                                    <tr><th> Заголовок EN </th><td> {{ $requisite->translate('en')->title }} </td></tr>
                                    <tr><th> Контент RU </th><td> {{ $requisite->translate('ru')->content }} </td></tr>
                                    <tr><th> Контент BY </th><td> {{ $requisite->translate('by')->content }} </td></tr>
                                    <tr><th> Контент EN </th><td> {{ $requisite->translate('en')->content }} </td></tr>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
