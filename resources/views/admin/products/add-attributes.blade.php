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
                              
                                <div class="form-group">
                                   
                                    <button class="form-control btn btn-success addMore" >Добавить ещё  <i class="fa fa-plus"></i></button>
                                </div>
                                
                                <form action="{{ $action=='update' ? route('updateAttributes', $product->id) : route('saveAttributes', $product->id) }}" method="post" >
                                    {{ csrf_field() }}
                                @forelse ($product->attributes as $attr)
                               
                                <div class="form-block">
                                    <div class="form-group">
                                        <label for="">Вес РУ</label>
                                        <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_ru[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Вес BY</label>
                                        <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_by[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Вес EN</label>
                                        <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_en[]">
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
                                        <button class="form-control btn btn-danger deleteAttr" data-id="{{ $attr->id }}"> <i class="fa fa-minus"></i></button>                              
                                    </div>
                                    <input type="hidden" name="attr_id[]" value="{{ $attr->id }}">
                                </div>
                                
                                @empty
                                
                                <div class="form-block">
                                    <div class="form-group">
                                        <label for="">Вес РУ</label>
                                        <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_ru[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Вес BY</label>
                                        <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_by[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Вес EN</label>
                                        <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_en[]">
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
                                <label for="">Вес РУ</label>
                                <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_ru[]">
                            </div>
                            <div class="form-group">
                                <label for="">Вес BY</label>
                                <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_by[]">
                            </div>
                            <div class="form-group">
                                <label for="">Вес EN</label>
                                <input type="text" value="{{ $action=='update' ? $attr['weight_'.\App::getLocale()] : '' }}" class="form-control" id="" placeholder="Вес" name="weights_en[]">
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

@section('scripts')
<script type="text/javascript">

    $(document).ready(function() {

      $(".addMore").click(function(e){
          e.preventDefault();
          var html = $(".hide_form").html();
          $(".attr-hr").after(html);
      });

      $("body").on("click",".removeAttr",function(e){ 
        e.preventDefault();
          $(this).parents(".form-block").remove();
      });

      $('.deleteAttr').click(function(e){
          e.preventDefault();
          var attr_id=$(this).data('id');
          
          $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/admin/products/delete-attribute',
                type: 'POST',
                data: {attr_id:attr_id},
                success:function(data){
                    location.reload();
                    
                }
          });
      })

    });

</script>
@endsection