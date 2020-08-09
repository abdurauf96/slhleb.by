$(document).ready(function(){
    
    $('.stock-type').click(function(){
        
        if($(this).val()=='competition'){
            $('.rules-block').removeClass('rules-block-hidden');
        }else{
            $('.rules-block').addClass('rules-block-hidden');
        }
    })
})