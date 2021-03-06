$(document).ready(function(){
    
    $('#category').change(function(){
        var id=$(this).val();
        console.log(id);
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/admin/getfilters',
            data: {id:id},
            success: function(data){
               $('#resFilters').html(data);
            },
            error:function(err){
                console.log(err);
            },
        });
    })

    $('.stock-type').click(function(){
        
        if($(this).val()=='competition'){
            $('.rules-block').removeClass('rules-block-hidden');
        }else{
            $('.rules-block').addClass('rules-block-hidden');
        }
    })

    $('.photo-trash').click(function(e){
        e.preventDefault();
        var id=$(this).data('id');
        if(confirm('вы действительно хотите удалить фото ?')){
            $.get('/admin/photo/'+id+'/delete', function(){
                location.reload();
            })
        }else{
            return false;
        }
        
    })
    
    $('.delete_foto').click(function(e){
        e.preventDefault();
        var id=$(this).data('id');
        var key=$(this).data('key');
        if(confirm('вы действительно хотите удалить фото ?')){
            $.get('/admin/product/'+id+'/delete/'+ key, function(){
                location.reload();
            })
        }else{
            return false;
        }
        
    })
    
    
    var url=window.location.href;
    $('[href="'+ url +'"]').parent().parent().parent().addClass('active');
    $('[href="'+ url +'"]').parent().parent().parent().addClass('menu-open');
    $('[href="'+ url +'"]').parent().addClass('active');
    
})