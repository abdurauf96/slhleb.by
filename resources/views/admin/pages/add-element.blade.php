@extends('layouts.admin')
<style>
    .lang_active{
        background-color: #11728a!important;
    }
    .hide{
        display: none;
    }
    .show{
        display: block;
    }
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Добавить элемент </div>
                    <div class="card-body">
                        <a href="/admin/pages" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
                        <br />
                        <br />
                        <a href="#" class="btn btn-info lang_toogle" data-lang="by">BY</a>
                        <a href="#" class="btn btn-info lang_toogle lang_active" data-lang="ru">RU</a>
                        <a href="#" class="btn btn-info lang_toogle" data-lang="en">EN</a>
                       <div class="form-body">
                              
                                <div class="form-group">
                                    <button class="form-control btn btn-success addMore" ><i class="fa fa-plus"></i> &nbsp Добавить элемент на страницу </button>
                                </div>
                                
                                <form action="{{ route('saveElements', $page->id) }}" enctype="multipart/form-data" method="post" >
                                    {{ csrf_field() }}
                                 
                                @forelse ($page->elements as $element)
                              
                                
                                <div class="form-block-participant">
                                    <div class="about_ru lang-block">
                                        <div class="form-group flex1">
                                            <label for=""> {{ $loop->iteration }}. Заголовок RU</label>
                                            <input type="text" value="{{ $element->title_ru }}" class="form-control"   name="title_ru[]">
                                        </div>
                                        <div class="form-group flex2">
                                            <label for="">Текст RU</label>
                                            <input type="text" value="{{ $element->tag_ru }}" class="form-control"   name="tag_ru[]">
                                        </div>
    
                                        <div class="form-group{{ $errors->has('content_ru') ? 'has-error' : ''}} flex3">
                                            {!! Form::label('content_ru', 'Содержимое Ru', ['class' => 'control-label']) !!}
                                            <textarea name="content_ru[]"  cols="30" rows="6" class="form-control">{{ $element->content_ru }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="about_by lang-block hide">
                                        <div class="form-group flex1">
                                            <label for="exampleInputPassword1">Заголовок BY</label>
                                            <input type="text" class="form-control"   value="{{ $element->title_by }}" name="title_by[]" >
                                        </div>
                                        <div class="form-group flex2">
                                            <label for="exampleInputPassword1">Текст BY</label>
                                            <input type="text" class="form-control"   value="{{ $element->tag_by }}" name="tag_by[]" >
                                        </div>
                                        <div class="form-group{{ $errors->has('content_by') ? 'has-error' : ''}} flex3">
                                            {!! Form::label('content_by', 'Содержимое By', ['class' => 'control-label']) !!}
                                            <textarea name="content_by[]"  cols="30" rows="6" class="form-control">{{ $element->content_by }}</textarea>
                                        </div>
                                    </div>


                                    <div class="about_en lang-block hide">
                                        <div class="form-group flex1">
                                            <label for="exampleInputPassword1">Заголовок EN</label>
                                            <input type="text" class="form-control" value="{{ $element->title_en }}" name="title_en[]" >
                                        </div>          
                                        <div class="form-group flex2">
                                            <label for="exampleInputPassword1">Текст EN</label>
                                            <input type="text" class="form-control" value="{{ $element->tag_en }}" name="tag_en[]" >
                                        </div> 
                                        <div class="form-group{{ $errors->has('content_en') ? 'has-error' : ''}} flex3">
                                            {!! Form::label('content_en', 'Содержимое En', ['class' => 'control-label']) !!}
                                           <textarea name="content_en[]"  cols="30" rows="6" class="form-control">{{ $element->content_en }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group flex4">
                                        <label for="exampleInputPassword1">Фото</label>
                                        <input type="file" class="form-control"  name="images[]" >
                                    </div>
                                    
                                    <div class="form-group flex5">
                                        <label for="">Удалить </label>
                                        <button class="form-control btn btn-danger deleteElement" data-id="{{ $element->id }}"> Удалить элемент <i class="fa fa-trash"></i></button>                              
                                    </div>
                                    <input type="hidden" name="element_id[]" value="{{ $element->id }}">
                                    
                                </div>
                                
                                @empty
                                    
                                
                                <div class="form-block-participant">
                                    <div class="about_ru lang-block">
                                        <div class="form-group flex1">
                                            <label for="">  Заголовок RU</label>
                                            <input type="text" value="" class="form-control"   name="title_ru[]">
                                        </div>
                                        <div class="form-group flex2">
                                            <label for="">Текст RU</label>
                                            <input type="text" value="" class="form-control"   name="tag_ru[]">
                                        </div>
    
                                        <div class="form-group{{ $errors->has('content_ru') ? 'has-error' : ''}} flex3">
                                            {!! Form::label('content_ru', 'Содержимое Ru', ['class' => 'control-label']) !!}
                                            <textarea name="content_ru[]"  cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="about_by lang-block hide">
                                        <div class="form-group flex1">
                                            <label for="exampleInputPassword1">Заголовок BY</label>
                                            <input type="text" class="form-control"   value="" name="title_by[]" >
                                        </div>
                                        <div class="form-group flex2">
                                            <label for="exampleInputPassword1">Текст BY</label>
                                            <input type="text" class="form-control"   value="" name="tag_by[]" >
                                        </div>
                                        <div class="form-group{{ $errors->has('content_by') ? 'has-error' : ''}} flex3">
                                            {!! Form::label('content_by', 'Содержимое By', ['class' => 'control-label']) !!}
                                            <textarea name="content_by[]"  cols="30" rows="6" class="form-control"></textarea>
                                        </div>
                                    </div>


                                    <div class="about_en lang-block hide">
                                        <div class="form-group flex1">
                                            <label for="exampleInputPassword1">Заголовок EN</label>
                                            <input type="text" class="form-control" value="" name="title_en[]" >
                                        </div>          
                                        <div class="form-group flex2">
                                            <label for="exampleInputPassword1">Текст EN</label>
                                            <input type="text" class="form-control" value="" name="tag_en[]" >
                                        </div> 
                                        <div class="form-group{{ $errors->has('content_en') ? 'has-error' : ''}} flex3">
                                            {!! Form::label('content_en', 'Содержимое En', ['class' => 'control-label']) !!}
                                           <textarea name="content_en[]"  cols="30" rows="6" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group flex4">
                                        <label for="exampleInputPassword1">Фото</label>
                                        <input type="file" class="form-control"  name="images[]" >
                                    </div>
                                    
                                    <div class="form-group flex5">
                                        <label for="">Удалить </label>
                                        <button class="form-control btn btn-danger deleteElement" data-id=""> Удалить элемент <i class="fa fa-trash"></i></button>                              
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
                            <div class="about_ru lang-block">
                                <div class="form-group flex1">
                                    <label for="">  Заголовок RU</label>
                                    <input type="text" value="" class="form-control"   name="title_ru[]">
                                </div>
                                <div class="form-group flex2">
                                    <label for="">Текст RU</label>
                                    <input type="text" value="" class="form-control"   name="tag_ru[]">
                                </div>

                                <div class="form-group{{ $errors->has('content_ru') ? 'has-error' : ''}} flex3">
                                    {!! Form::label('content_ru', 'Содержимое Ru', ['class' => 'control-label']) !!}
                                    <textarea name="content_ru[]"  cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <div class="about_by lang-block hide">
                                <div class="form-group flex1">
                                    <label for="exampleInputPassword1">Заголовок BY</label>
                                    <input type="text" class="form-control"   value="" name="title_by[]" >
                                </div>
                                <div class="form-group flex2">
                                    <label for="exampleInputPassword1">Текст BY</label>
                                    <input type="text" class="form-control"   value="" name="tag_by[]" >
                                </div>
                                <div class="form-group{{ $errors->has('content_by') ? 'has-error' : ''}} flex3">
                                    {!! Form::label('content_by', 'Содержимое By', ['class' => 'control-label']) !!}
                                    <textarea name="content_by[]"  cols="30" rows="6" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="about_en lang-block hide">
                                <div class="form-group flex1">
                                    <label for="exampleInputPassword1">Заголовок EN</label>
                                    <input type="text" class="form-control" value="" name="title_en[]" >
                                </div>          
                                <div class="form-group flex2">
                                    <label for="exampleInputPassword1">Текст EN</label>
                                    <input type="text" class="form-control" value="" name="tag_en[]" >
                                </div> 
                                <div class="form-group{{ $errors->has('content_en') ? 'has-error' : ''}} flex3">
                                    {!! Form::label('content_en', 'Содержимое En', ['class' => 'control-label']) !!}
                                   <textarea name="content_en[]"  cols="30" rows="6" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group flex4">
                                <label for="exampleInputPassword1">Фото</label>
                                <input type="file" class="form-control"  name="images[]" >
                            </div>
                            
                            <div class="form-group flex5">
                                <label for="">Удалить </label>
                                <button class="form-control btn btn-danger removeAttr" data-id=""> Удалить элемент <i class="fa fa-trash"></i></button>                              
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
<script src="/plugins/ckeditor/ckeditor.js"></script>
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

      $('.deleteElement').click(function(e){
          e.preventDefault();
          var element_id=$(this).data('id');
          
          $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/admin/pages/elements/delete',
                type: 'POST',
                data: {element_id:element_id},
                success:function(){
                    location.reload();
                    
                }
          });
      })

    });
</script>
{{-- <script src="/plugins/ckeditor/ckeditor.js"></script>
<script src="/plugins/ckeditor/adapters/jquery.js"></script>
<script>

    // CKEDITOR.replace( 'elementContent1' , {
    //     filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // } );
    // CKEDITOR.replace( 'elementContent2', {
    //     filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // }  );
    // CKEDITOR.replace( 'elementContent3', {
    //     filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // }  );

    $('textarea').ckeditor({
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    })
</script> --}}

<script>
$(function () {
    $('.lang_toogle').click(function(e){
        e.preventDefault();
        var lang=$(this).data('lang');
        $(this).addClass('lang_active');
        $(this).siblings().removeClass('lang_active');
    
        if(lang=="by"){
            $('.about_ru').addClass('hide');
            //$('.about_by').addClass('show');
            $('.about_by').removeClass('hide');
            $('.about_en').addClass('hide');
        }else if(lang=="ru"){
            $('.about_by').addClass('hide');
            //$('.about_ru').addClass('show');
            $('.about_ru').removeClass('hide');
            $('.about_en').addClass('hide');
        }else{
            $('.about_by').addClass('hide');
            //$('.about_en').addClass('show');
            $('.about_en').removeClass('hide');
            $('.about_ru').addClass('hide');
        }
        

    })
});
</script>
@endsection