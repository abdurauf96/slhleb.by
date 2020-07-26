@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ $action=='update' ? 'Обновить шаги' : 'Добавить шаг' }} </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                       <div class="form-body">
                              
                                <div class="form-group">
                                   
                                    <button class="form-control btn btn-success addMore" >Добавить шаг к рецепту  <i class="fa fa-plus"></i></button>
                                </div>
                                
                                <form action="{{ $action=='update' ? route('updateStep') : route('saveStep') }}" enctype="multipart/form-data" method="post" >
                                    {{ csrf_field() }}
                                @forelse ($recipe->steps as $step)
                               
                                <div class="form-block">
                                    <div class="form-group">
                                        <label for="">Заголовок RU</label>
                                        <input type="text" value="{{ $step->title_ru }}" class="form-control"   name="title_ru[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Заголовок BY</label>
                                        <input type="text" class="form-control"   value="{{ $step->title_by }}" name="title_by[]" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Заголовок EN</label>
                                        <input type="text" class="form-control" value="{{ $step->title_en }}" name="title_en[]" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Фото</label>
                                        <input type="file" class="form-control"  name="images[]" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Удалить </label>
                                        <button class="form-control btn btn-danger deleteStep" data-id="{{ $step->id }}"> <i class="fa fa-minus"></i></button>                              
                                    </div>
                                    <input type="hidden" name="step_id[]" value="{{ $step->id }}">
                                    <input type="hidden" name="recipe_id[]" value="{{ $recipe->id }}">
                                </div>
                                
                                @empty
                                
                                <div class="form-block">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Заголовок RU</label>
                                        <input type="text" class="form-control"  name="title_ru[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Заголовок BY</label>
                                        <input type="text" class="form-control"  name="title_by[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Заголовок EN</label>
                                        <input type="text" class="form-control"  name="title_en[]" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Фото</label>
                                        <input type="file" class="form-control"  name="images[]" >
                                    </div>
                                    <input type="hidden" name="recipe_id[]" value="{{ $recipe->id }}">
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
                                <label for="exampleInputEmail1">Заголовок RU</label>
                                <input type="text" class="form-control"  name="title_ru[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Заголовок BY</label>
                                <input type="text" class="form-control"  name="title_by[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Заголовок EN</label>
                                <input type="text" class="form-control"  name="title_en[]" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Фото</label>
                                <input type="file" class="form-control"  name="images[]" >
                            </div>
                            <input type="hidden" name="recipe_id[]" value="{{ $recipe->id }}">
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

      $('.deleteStep').click(function(e){
          e.preventDefault();
          var step_id=$(this).data('id');
          
          $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/admin/recipes/delete-step',
                type: 'POST',
                data: {step_id:step_id},
                success:function(){
                    location.reload();
                    
                }
          });
      })

    });

</script>
@endsection