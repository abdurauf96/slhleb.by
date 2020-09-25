$(document).ready(function(){

    $('.start_test').click(function(e){

        var name=$('.username').val();
        var weight=parseInt($('.weight').val());
        var height=parseFloat($('.height').val())/100;
        var index_mass=Math.round(parseFloat(weight/(height*height))*100)/100;
        
        
        $('.quiz_name').html('вот что получилось, ' + name + '!')
        $('.result_index_mass').html( 'Ваш индекс массы тела: ' +  index_mass)
        if(index_mass<16){
            $('.desc_index_mass').html('Классификация: Выраженный дефицит массы тела');
        }else if(index_mass>16 && index_mass<18.5){
            $('.desc_index_mass').html('Классификация: Недостаточная (дефицит) масса тела');
        }else if(index_mass>18.5 && index_mass<25){
            $('.desc_index_mass').html('Классификация: Норма');
        }else if(index_mass>25 && index_mass<30){
            $('.desc_index_mass').html('Классификация: Избыточная масса тела (предожирение)');
        }else if(index_mass>30 && index_mass<35){
            $('.desc_index_mass').html('Классификация: Ожирение');
        }else if(index_mass>35 && index_mass<40){
            $('.desc_index_mass').html('Классификация: Ожирение резкое');
        }else{
            $('.desc_index_mass').html('Классификация: Очень резкое ожирение');
        }

        //step 1
        var step1=parseInt($("input[name='step1']:checked").val());
        var res_step1;
        switch (step1) {
            case 1:
                res_step1="<p> Вы моментально оцениваете создавшуюся ситуацию, легко принимаете решение и страстно отстаиваете своё мнение. </p>";
                break;
            case 2:
                res_step1="<p> Вы личность энергичная и смелая.</p>";
                break;
            case 3:
                res_step1="<p> Вы отзывчивы, охотно помогаете тем, кто нуждается в вашей помощи.</p>";
                break;
            case 4:
                res_step1="<p> У вас прекрасное чувство меры. Вы обходительны, тактичны, покладисты. </p>";
                break;
            case 5:
                res_step1="<p> Вы творческий человек, не лишённый авантюризма.</p>";
                break;
            case 6:
                res_step1="<p> Вы мудры, непринуждённы в общении, к вам тянутся люди.</p>";
                break;
            default:
                break;
        }
        $('.res_step1').html(res_step1);
    
        //step 2 
        var step2=parseInt($("input[name='step2']:checked").val());
        var res_step2;
        switch (step2) {
            case 1:
                res_step2="<p>Ваши надежды и планы сбудутся сверх всяких ожиданий. </p>";
                break;
            case 2:
                res_step2="<p>Очень скоро Вам придёт важное известие.</p>";
                break;
            case 3:
                res_step2="<p>Будьте внимательны к подсказкам судьбы.</p>";
                break;
            case 4:
                res_step2="<p>Если Вы проявите инициативу сейчас, успех не заставит себя ждать. </p>";
                break;
            case 5:
                res_step2="<p>Результат Ваших действий может оказаться неожиданным.</p>";
                break;
            case 6:
                res_step2="<p>Сосредоточьтесь на настоящем.</p>";
                break;
            case 7:
                res_step2="<p>Вперед и только вперед: дело, о котором Вы думаете, — правое!</p>";
                break;
            default:
                break;
        }
        $('.res_step2').html(res_step2);

        //step 3
        var step3=parseInt($("input[name='step3']:checked").val());
        var res_step3;
        switch (step3) {
            case 1:
                res_step3=" <img width='150px' src='/quiz/31.png' alt=''>  <p> <a href='https://slhleb.by/product/khleb-chisto-rzhanoy-s-semechkami-pod'> Хлеб Чисто ржаной с семечками </a> - БЕЗ пшеничной муки.Все виды ржаного хлеба представляют собой настоящий «коктейль» из витаминов группы В, РР, Е, А, макро- и микроэлементов, железа, марганца, цинка, магния, калия, клетчатки.  Кроме этого, ржаная мука богата необходимой для организма аминокислотой – лизином, являющейся основой для строительства белковых клеток в человеческом теле. К тому же, ржаной хлеб обладает меньшей энергетической ценностью. Попробуйте приготовить <a href='https://slhleb.by/interesno/recipe/salat-studencheskiy-s-khlebom-chisto-rzhanoy-s-semechkami'>салат с хлебом «Чисто ржаной с семечками»</a> - очень, простой и быстрый в приготовлении! </p>";
                break;
            case 2:
                res_step3=" <img width='150px' src='/quiz/32.png' alt=''> <p> <a href='https://slhleb.by/product/khlebets-polevoy-so-lnom-form-ster'>Хлебец «Полевой со льном» </a>, который превосходно подходит для сбалансированного питания, т.к. в его состав входят семена подсолнечника и льна, а так же крупы: кукурузная, овсяная, перловая и пшеничная. Завтрак – это важный источник энергии и поэтому залог отличного настроения на весь день! Правильный завтрак поможет тем, кто хочет быть в отличной  форме. У нас на сайте можно найти рецепт <a href='https://slhleb.by/interesno/recipe/sendvich-kapreze-s-khlebtsom-polevoy-so-lnom'>сэндвича «Капрезе» с хлебцом «Полевой со льном» </a> </p>";
                break;
            case 3:
                res_step3="<img width='150px' src='/quiz/33.png' alt=''> <p> <a href='https://slhleb.by/product/khleb-safiyski-form'>Хлеб Сафiйскi. </a> Есть такой хлеб, аромат и вкус которого мы помним с детства, он напоминает о воскресном утре и становится дорог для каждой семьи. О таком хлебе говорят – классический! Рецепт <a href='https://slhleb.by/interesno/recipe/salat-iz-kuritsy-s-khlebom-safiyskim'> салата из курицы с хлебом «Сафiйскi» </a> попробуйте приготовить на этой неделе!</p>";
                break;
            case 4:
                res_step3="<img width='150px' src='/quiz/34.png' alt=''>  <p><a href='https://slhleb.by/product/baton-dlya-vsey-semi-vs'>Батон 'Для всей семьи'. </a> Создан  для неторопливых семейных обедов. Можно выбрать батон нужного Вам развеса. И, конечно, приготовьте <a href='https://slhleb.by/interesno/recipe/tosty-s-batonom-dlya-vsey-semi-s-shokoladnoy-pastoy-i-bananom'> тосты с батоном «Для всей семьи» с шоколадной пастой. </a></p>";
                break;
            case 5:
                res_step3="<img width='150px' src='/quiz/35.png' alt=''> <p> <a href='https://slhleb.by/product/khleb-kupetski-form'> хлеб 'Купецкi'.</a>  Вы еще его не пробовали? Обладает приятным сладковатым вкусом и ярким ароматом натурального солода. Мм-м. Очень вкусный.  Мы приготовили <a href='https://slhleb.by/interesno/recipe/khlebnye-rolly-kupetskie-s-syrom-i-forelyu'> хлебные роллы «Купецкие» с сыром и форелью, </a> попробуйте сделать их и Вы. </p>";
                break;
            case 6:
                res_step3='<img width="150px" src="/quiz/36.png" >  <p> <a href="https://slhleb.by/product/khleb-rzhanoy-kray-form"> хлеб "Ржаной край" </a> попробуйте!  Имеет бесподобный кисло- сладкий вкус, а добавление тмина и кориандра подчеркивает его неповторимый аромат. Ведь не стоит отказываться от хлеба: помимо пищевых волокон именно в хлебе содержатся необходимые витамины, незаменимые аминокислоты, микро- и макроэлементы! А <a href="https://slhleb.by/interesno/recipe/salat-s-khlebom-rzhanoy-kray"> салат с хлебом « Ржаной край» </a> Вы можете посмотреть у нас на сайте.</p>';
                break;
            default:
                break;
        }
        $('.res_step3').html(res_step3);

        //step 4
        var step4=parseInt($("input[name='step4']:checked").val());
        var res_step4;
        switch (step4) {
            case 1:
                res_step4="<img width='150px' src='/quiz/41.png' alt=''><p><a href='https://slhleb.by/product/tort-slutski-smak'> Торт «Слуцкi смак». </a> Торт, который отражает дух города Слуцка.  Это невероятно вкусный торт, очень яркое сочетание медовых коржей и нежного сметанного крема. </p>";
                break;
            case 2:
                res_step4="<img width='150px' src='/quiz/42.png' alt=''><p> <a href='https://slhleb.by/product/tort-kievskiy-novyy'>Торт «Киевский». </a> Хорош не только внутри, но и снаружи.  Это невероятно вкусный торт, очень яркое сочетание воздушно-ореховых коржей, соединенных нежным сливочным кремом, придется по душе любому сладкоежке.</p>";
                break;
            case 3:
                res_step4="<img width='150px' src='/quiz/43.png' alt=''><p> <a href='https://slhleb.by/product/tort-skazka'>Торт «Сказка». </a> Это действительно тот самый торт!  Предлагаем тем, у кого в душе еще таится внутренний ребенок. Это невероятный мягкий бисквит, свернутый в виде рулета, прослоенный нежным сливочным кремом.</p>";
                break;
            case 4:
                res_step4="<img width='150px' src='/quiz/44.png' alt=''><p> <a href='https://slhleb.by/product/tort-leningradskiy'>Торт «Ленинградский». </a>  Настоящий шедевр советской кондитерской кухни. Это песочный торт со сливочно -шоколадным кремом.</p>";
                break;
            case 5:
                res_step4="<img width='150px' src='/quiz/45.png' alt=''><p><a href='https://slhleb.by/product/tort-esterkhazi'>Торт «Эстерхази» .</a> Поистине является жемчужиной венской кухни. Но вам не придётся отправляться в путешествие, чтобы ощутить его незабываемый вкус. Нотки миндаля, прекрасное сочетание белого и темного шоколада, молочно-масляная начинка – всё это заставит вас отправиться вслед за своими мыслями и чувствами, известными только вам самим. Нежный вкус принесет загадочность и подлинное блаженство.</p>";
                break;
            case 6:
                res_step4="<img width='150px' src='/quiz/46.png' alt=''><p> <a href='https://slhleb.by/product/tort-shvartsvald'> Торт «Шварцвальд» </a> просто создан для тех, кто не может устоять перед вкусом шоколада и черешни. Шоколадный бисквит, свернутый в виде рулета с начинкой фруктовой и сметано масляной. </p>";
                break;
            default:
                break;
        }
        $('.res_step4').html(res_step4);

        //step 5
        var step5=parseInt($("input[name='step5']:checked").val());
        var res_step5;
        switch (step5) {
            case 1:
                res_step5="<img width='150px' src='/quiz/51.png' alt=''> <p><a href='https://slhleb.by/product/sukhari-grenki-ringas-s-syrom'> Сухарики «Ringas» со вкусом сыра.</a> Однажды взяв с собой в поход сухарики «Ringas» вы больше никогда не вычеркнете его из своего списка продуктов, обязательных к покупке </p>";
                break;
            case 2:
                res_step5="<img width='150px' src='/quiz/52.png' alt=''> <p> <a href='https://slhleb.by/product/sukhari-shla-sasha-s-makom'>Сухари «Шла Саша» с маком. </a> Новинка, которая просто не оставит вас равнодушным. Вечером у компьютера под классный фильм….. что может быть лучше?</p>";
                break;
            case 3:
                res_step5="<img width='150px' src='/quiz/53.png' alt=''> <p><a href='https://slhleb.by/product/sukhari-grenki-ringas-belye-griby-so-smetanoy'> Сухарики «Ringas» со вкусом белых грибов со сметаной.</a>  Новинка, которая просто не оставит вас равнодушным. Дополнит любую вечеринку</p>";
                break;
            case 4:
                res_step5="<img width='150px' src='/quiz/54.png' alt=''> <p> <a href='https://slhleb.by/product/sukhari-grenki-ringas-smetana-i-zelen'> Сухарики «Ringas» со вкусом сметаны и зелени. </a> Новинка, которая просто не оставит вас равнодушным. Скрасит рутину и поднимет вам настроение на все выходные.</p>";
                break;
            default:
                break;
        }
        $('.res_step5').html(res_step5);

        //step 6
        var step6=parseInt($("input[name='step6']:checked").val());
        var res_step6;
        switch (step6) {
            case 1:
                res_step6="<p>Танцуй так, как будто на тебя никто не смотрит. Пой, как будто тебя никто не слышит. Люби так, как будто тебя никогда не предавали, и живи так, как будто земля — это рай. Марк Твен </p>";
                break;
            case 2:
                res_step6="<p>Не тот велик, кто никогда не падал, а тот велик — кто падал и вставал. Конфуций</p>";
                break;
            case 3:
                res_step6="<p>Веди себя так, будто ты уже счастлив, и ты действительно станешь счастливее. Дейл Карнеги</p>";
                break;
            case 4:
                res_step6="<p>Не стесняйтесь своих чувств и желаний. Другой жизни для них больше не будет! Эрих Мария Ремарк</p>";
                break;
            default:
                break;
        }
        $('.res_step6').html(res_step6);
        
    })

    // $(".chbox").click(function(e){
    //     if(ids.length==1){
    //         $("input.chbox:not(:checked)").attr('disabled', true);
    //     }else{
    //         $("input.chbox:not(:checked)").removeAttr('disabled');
    //     }
    //     var id=parseInt($(this).val());
       
        
    //         if ($(this).is(':checked')) {
           
    //             ids.push(id);
    //             console.log(ids)
    //         } else {
    //             ids=jQuery.grep(ids, function(value) {
    //                 return value != id;
    //             });
    //             console.log(ids)
    //         }    
    //         $.ajax({
    //             headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             type: 'POST',
    //             url: '/getQuizProducts',
    //             data: {ids:ids},
    //             success: function(data){
    //                $('#quiz-slider').html(data);
    //             },
    //             error:function(err){
    //                 console.log(err);
    //             },
    //         });   
        
    // })

    // var doc = new jsPDF();
    // var specialElementHandlers = {
    //     '#editor': function (element, renderer) {
    //         return true;
    //     }
    // };

    // $('#savePdf').click(function () {
    //     doc.fromHTML($('#content').html(), 15, 15, {
    //         'width': 170,
    //             'elementHandlers': specialElementHandlers
    //     });
    //     doc.save('result.pdf');
    // });

});