@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Product {{ $product->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/products/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/products', $product->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Product',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Категория продукта </th>
                                        <td> {{ $product->category->translate(app()->getLocale())->name }} </td>
                                    </tr>
                                    <tr><th> Фильтр продукта  </th>
                                        <td> {{ $product->filter->translate(app()->getLocale())->name }}  </td>
                                    </tr>
                                    <tr>
                                        <th> Название продукта </th>
                                        <td> {{ $product->translate(app()->getLocale())->name }} </td>
                                    </tr>
                                    <tr>
                                        <th>О продукте </th>
                                        <td> {{ $product->translate(app()->getLocale())->about }} </td>
                                    </tr>
                                    <tr>
                                        <th>Описание продукта </th>
                                        <td> {{ $product->translate(app()->getLocale())->description }} </td>
                                    </tr>
                                    <tr>
                                        <th>Состав продукта </th>
                                        <td> {{ $product->translate(app()->getLocale())->consist }} </td>
                                    </tr>
                                    <tr>
                                        <th>Белков </th>
                                        <td> {{ $product->protein }} </td>
                                    </tr>
                                    <tr>
                                        <th>Углеводов </th>
                                        <td> {{ $product->carbo }} </td>
                                    </tr>
                                    <tr>
                                        <th>Жиров </th>
                                        <td> {{ $product->fat }} </td>
                                    </tr>
                                    <tr>
                                        <th>Энергетическая ценност (калорийность) </th>
                                        <td> {{ $product->callory }} </td>
                                    </tr>
                                    <tr>
                                        <th> Вес одного продукта </th>
                                        <td> {{ $product->weight }} </td>
                                    </tr>
                                    <tr>
                                        <th>Фото продукта </th>
                                        <td> <img src="/images/products/{{ $product->image }}" width="50" height="50" alt=""> </td>
                                    </tr>
                                    <tr>
                                        <th>Статус </th>
                                        <td> @if ($product->status=='new')
                                            Новинка
                                            @elseif($product->status=='xit')
                                            Хит
                                        @endif </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
