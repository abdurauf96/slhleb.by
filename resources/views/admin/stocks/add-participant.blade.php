@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Добавить участника </div>
                    <div class="card-body">
                        <a href="/admin/competitions" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
                        <br />
                        <br />

                       <div class="form-body">
                              
                                <div class="form-group">
                                    <button class="form-control btn btn-success addMore" ><i class="fa fa-plus"></i> &nbsp Добавить участника на конкурс  </button>
                                </div>
                                
                                <form action="/admin/competitions/{{ $competition->id }}/add-participant" enctype="multipart/form-data" method="post" >
                                    {{ csrf_field() }}
                                 
                                @forelse ($competition->participants as $part)
                                <div class="form-block-participant">
                                    <div class="form-group flex1">
                                        <label for="">Название участника RU</label>
                                        <input type="text" value="{{ $part->name_ru }}" class="form-control"   name="name_ru[]">
                                    </div>
                                    <div class="form-group flex2">
                                        <label for="exampleInputPassword1">Название участника BY</label>
                                        <input type="text" class="form-control"   value="{{ $part->name_by }}" name="name_by[]" >
                                    </div>
                                    <div class="form-group flex3">
                                        <label for="exampleInputPassword1">Название участника EN</label>
                                        <input type="text" class="form-control" value="{{ $part->name_en }}" name="name_en[]" >
                                    </div>
                                    <div class="form-group flex4">
                                        <label for="">Описание участника RU</label>
                                        <input type="text" value="{{ $part->desc_ru }}" class="form-control"   name="desc_ru[]">
                                    </div>
                                    <div class="form-group flex5">
                                        <label for="exampleInputPassword1">Описание участника BY</label>
                                        <input type="text" class="form-control"   value="{{ $part->desc_by }}" name="desc_by[]" >
                                    </div>
                                    <div class="form-group flex6">
                                        <label for="exampleInputPassword1">Описание участника EN</label>
                                        <input type="text" class="form-control" value="{{ $part->desc_en }}" name="desc_en[]" >
                                    </div>
                                    <div class="form-group flex7">
                                        <label for="exampleInputPassword1">Место</label>
                                        <input type="text" class="form-control" value="{{ $part->point }}" name="point[]" >
                                    </div>
                                    <div class="form-group flex8">
                                        <label for="exampleInputPassword1">Фото</label>
                                        <input type="file" class="form-control"  name="images[]" >
                                    </div>
                                    <div class="form-group flex9">
                                        <label for="">Удалить </label>
                                        <button class="form-control btn btn-danger deleteParticipant" data-id="{{ $part->id }}"> <i class="fa fa-minus"></i></button>                              
                                    </div>
                                    {{-- <input type="hidden" name="step_id[]" value="">
                                    <input type="hidden" name="recipe_id[]" value=""> --}}
                                </div>
                                @empty
                                    
                                
                                <div class="form-block-participant">
                                    <div class="form-group flex1">
                                        <label for="">Название участника RU</label>
                                        <input type="text" value="" class="form-control"   name="name_ru[]">
                                    </div>
                                    <div class="form-group flex2">
                                        <label for="exampleInputPassword1">Название участника BY</label>
                                        <input type="text" class="form-control"   value="" name="name_by[]" >
                                    </div>
                                    <div class="form-group flex3">
                                        <label for="exampleInputPassword1">Название участника EN</label>
                                        <input type="text" class="form-control" value="" name="name_en[]" >
                                    </div>
                                    <div class="form-group flex4">
                                        <label for="">Описание участника RU</label>
                                        <input type="text" value="" class="form-control"   name="desc_ru[]">
                                    </div>
                                    <div class="form-group flex5">
                                        <label for="exampleInputPassword1">Описание участника BY</label>
                                        <input type="text" class="form-control"   value="" name="desc_by[]" >
                                    </div>
                                    <div class="form-group flex6">
                                        <label for="exampleInputPassword1">Описание участника EN</label>
                                        <input type="text" class="form-control" value="" name="desc_en[]" >
                                    </div>
                                    <div class="form-group flex7">
                                        <label for="exampleInputPassword1">Место</label>
                                        <input type="text" class="form-control" value="" name="point[]" >
                                    </div>
                                    <div class="form-group flex8">
                                        <label for="exampleInputPassword1">Фото</label>
                                        <input type="file" class="form-control"  name="images[]" >
                                    </div>
                                    <div class="form-group flex9">
                                        <label for="">Удалить </label>
                                        <button class="form-control btn btn-danger removeAttr" > <i class="fa fa-minus"></i></button>                              
                                    </div>
                                    {{-- <input type="hidden" name="step_id[]" value="">
                                    <input type="hidden" name="recipe_id[]" value=""> --}}
                                </div>
                                @endforelse
                                
                                <hr class="attr-hr">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </form>
                       </div>
                       {{-- hide block --}}
                       <div class="hide_form">
                        <div class="form-block-participant hide-group ">
                            <div class="form-group flex1">
                                <label for="">Название участника RU</label>
                                <input type="text" value="" class="form-control"   name="name_ru[]">
                            </div>
                            <div class="form-group flex2">
                                <label for="exampleInputPassword1">Название участника BY</label>
                                <input type="text" class="form-control"   value="" name="name_by[]" >
                            </div>
                            <div class="form-group flex3">
                                <label for="exampleInputPassword1">Название участника EN</label>
                                <input type="text" class="form-control" value="" name="name_en[]" >
                            </div>
                            <div class="form-group flex4">
                                <label for="">Описание участника RU</label>
                                <input type="text" value="" class="form-control"   name="desc_ru[]">
                            </div>
                            <div class="form-group flex5">
                                <label for="exampleInputPassword1">Описание участника BY</label>
                                <input type="text" class="form-control"   value="" name="desc_by[]" >
                            </div>
                            <div class="form-group flex6">
                                <label for="exampleInputPassword1">Описание участника EN</label>
                                <input type="text" class="form-control" value="" name="desc_en[]" >
                            </div>
                            <div class="form-group flex7">
                                <label for="exampleInputPassword1">Место</label>
                                <input type="text" class="form-control" value="" name="point[]" >
                            </div>
                            <div class="form-group flex8">
                                <label for="exampleInputPassword1">Фото</label>
                                <input type="file" class="form-control"  name="images[]" >
                            </div>
                            <div class="form-group flex9">
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
          $(this).parents(".form-block-participant").remove();
      });

      $('.deleteParticipant').click(function(e){
          e.preventDefault();
          var part_id=$(this).data('id');
          
          $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/admin/participants/delete',
                type: 'POST',
                data: {part_id:part_id},
                success:function(){
                    location.reload();
                    
                }
          });
      })

    });

</script>
@endsection