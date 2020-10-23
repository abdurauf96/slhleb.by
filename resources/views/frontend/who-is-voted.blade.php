@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('interesting') }}">@lang('messages.eto-int')</a></li>
<li class="breadcrumb-item"><a href="{{ route('stockCompetitions') }}">@lang('messages.stocks')</a></li>
@endsection
@section('child')
Статистика
@endsection

@section('content')
<div class="section__wrapper">
    
    <div class="section__content section-stock" style="background-image: url('/frontend/images/bg-main.jpg')">
        <!-- <div class="section-bg-floating">
            <div class="bg-floating"></div>
        </div> -->
       
        <input type="hidden" value="{{ $participant->id }}" class="participant_id">
        
        <div class="container">
           <div class="mapael" >
            	<div class="map"></div>
        	</div>
        </div>
            <a class="belorus btn btn-info" href="#modal-by" data-toggle="modal">статистика по Беларуси</a>
            
             @include('layouts.footer')
        </div>
        
       
        
    </div>

<div class="modal fade procedure-consideration modal-order" id="modal-by">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding-bottom: 100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <a href="#" class="modal-logo">
                        <img src="/frontend/images/logo.png" alt="">
                    </a>
                    <h5 >Статистика по Беларуси</h5>
                    <div class="content">
                        <ul>
                            @foreach ($cities as $city)
                            @php
                                $name=$city['name'];
                            @endphp 
                            <li>{{ $city['name'] }} :  @php $test=array_count_values(array_column($number_all_cities, 'name')); echo $test[$name] @endphp  </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.2.0/js/jquery.mapael.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery-mapael@2.2.0/js/jquery.mapael.min.js"></script>
<script src="/frontend/js/world_countries.min.js"></script>

<script>
    
    
    var id=$('.participant_id').val();
    var regions;
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           url: '/get-regions',
           type: 'POST',
           data: {id:id},
           success:function(data){
               console.log(data);
               //console.log(data[1]['lon'])
               var plots={};
               $.each(data, function (id, elem) {
                       
                    var count=0;
                    for (let num = 0; num < data.length; num++) {
                        const element = data[num];
                        if(element['code']==elem['code']){
                            count++;
                        }
                        
                    }
                    var plot = {};
                    
                   	plot.width =10;
                    plot.height = 10;
                    plot.attrs={opacity: 1};
                    plot.attrsHover={fill: "#a4e100"};
                    plot.latitude = elem['lat'];
                    plot.longitude = elem['lon'];
                  
                    plot.tooltip={content: "<div class='map__block' ><h3 class='map__head'>"+elem['name'] + "</h3><p>Кол-во голосов:<span>("+count+")  </span></p> </div>"};
                     plots[id] = plot;
                       
                });

                $(".mapael").mapael({
        
                    map : {
                        name : "world_countries"
                    },
                    plots:plots,            
                    
                });

           }
    });

    /*!
 *
 * Jquery Mapael - Dynamic maps jQuery plugin (based on raphael.js)
 * Requires jQuery and Mapael >=2.0.0
 *
 * Map of belorus
 * 
 * @author Abdurauf
 */

    
</script>
@endsectionus
 * 
 * @author Abdurauf
 */

    
</script>
@endsectionauf
 */

    
</script>
@endsectionus
 * 
 * @author Abdurauf
 */

    
</script>
@endsection