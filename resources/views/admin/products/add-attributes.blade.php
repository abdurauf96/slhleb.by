@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ $action=='update' ? 'Обновить атрибут' : 'Добавить атрибут' }} </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                       <div class="form-body">
                            <form action="{{ $action=='update' ? route('updateAttributes', $product->id) : route('saveAttributes', $product->id) }}" method="post" >
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Добавить ещё </label>
                                    <button class="form-control btn btn-success addMore" > <i class="fa fa-plus"></i></button>
                                </div>
                                
                               
                                @forelse ($product->attributes as $attr)
                               
                                <div class="form-block">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Вес</label>
                                        <input type="text" value="{{ $action=='update' ? $attr->weight : '' }}" class="form-control" id="exampleInputEmail1" placeholder="Вес" name="weights[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Срок хранения</label>
                                        <input type="text" class="form-control"   value="{{ $action=='update' ? $attr->time : '' }}" name="times[]" placeholder="Срок хранения">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Штук</label>
                                        <input type="text" class="form-control" value="{{ $action=='update' ? $attr->qty : '' }}" name="qtys[]" placeholder="Штук">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Удалить </label>
                                        <button class="form-control btn btn-danger removeAttr" > <i class="fa fa-minus"></i></button>
                                    </div>
                                    @if($action=='update')
                                    <input type="hidden" name="attr_id[]" value="{{ $attr->id }}">
                                    @endif
                                </div>
                                
                                @empty
                                    
                                <div class="form-block">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Вес</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Вес" name="weights[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Срок хранения</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="times[]" placeholder="Срок хранения">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Штук</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="qtys[]" placeholder="Штук">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Удалить </label>
                                        <button class="form-control btn btn-danger removeAttr" > <i class="fa fa-minus"></i></button>
                                    </div>
                                </div>

                                @endforelse
                              
                                
                                
                                <hr class="attr-hr">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </form>
                       </div>
                       <div class="hide_form">
                        <div class="form-block hide-group ">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Вес</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Вес" name="weights[]">
                            </div>
                            <div class="form-group">
                                <label >Срок хранения</label>
                                <input type="text" class="form-control"  name="times[]" placeholder="Срок хранения">
                            </div>
                            <div class="form-group">
                                <label >Штук</label>
                                <input type="text" class="form-control"  name="qtys[]" placeholder="Штук">
                            </div>
                            <div class="form-group">
                                <label for="">Удалить </label>
                                <button class="form-control btn btn-danger removeAttr" > <i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                       </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
