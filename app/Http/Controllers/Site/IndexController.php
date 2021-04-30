<?php

namespace App\Http\Controllers\Site;
use App\Recipe;
use App\Product;
use App\Page;
use App\Participant;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appeal;
use Illuminate\Support\Facades\Mail;
use MetaTag;
use GuzzleHttp\Client;


class IndexController extends Controller
{
   
    public function index()
    {

        $recipes=Recipe::whereStatus(1)->get();
        $banners=\App\HomeBanner::all();
        $sliders=\App\Slider::all();
        $bloks=\App\MainBlok::all();
        MetaTag::set('title','Слуцкий хлебозавод');
        MetaTag::set('description','Главная страница ');
        return view('frontend.welcome', compact('recipes', 'banners', 'sliders', 'bloks'));
    }

   public function toVote(Request $request)
    {
        $username=$request->user_ip;
        $participant_id=$request->participant_id;
        $competition_id=$request->competition_id;
        $participant=\App\Participant::find($participant_id);
        
        $vote=\App\Vote::where('user_ip', $user_ip)->where('participant_id', $participant_id)->first();
        if($vote){
            $data=['text'=>'Вы уже голосовали !', 'num_votes'=>count($participant->votes)];
        }else{
            \App\Vote::create([
                'competition_id'=>$competition_id,
                'participant_id'=>$participant_id, 
                'user_ip'=>$user_ip
            ]);
            $participant->vote=$participant->vote+1;
            $participant->save();
            $data=['text'=>'Спасибо! Ваш голос принят', 'num_votes'=>count($participant->votes)];
        }
        return response()->json($data);
    }

    public function whoIsVoted($id)
    {
        
        $participant=Participant::findOrFail($id);
        $votes=$participant->votes;
       
        $client = new \GuzzleHttp\Client([
            'headers' => ['Content-Type' => 'application/json']
        ]);
       
        $cities=[];
        $number_all_cities=[];
        $data=[];
        
        foreach ($votes as $vote) {
            $url='http://api.ipstack.com/'.$vote->user_ip.'?access_key=ff895b339fe2b1e7cfee73f396cb673d&format=1';
            $response = $client->get($url);
            $response = json_decode($response->getBody(), true);
            $data['lat']=$response['latitude'];
            $data['lon']=$response['longitude'];
            $data['name']=$response['region_name'];
            $data['country_code']=$response['country_code'];
            array_push($number_all_cities, $data);
            if($data['country_code']=="BY"){
                
                
                $num=0;
                foreach($cities as $city){
                    if($city['name']==$data['name']){
                        $num++;
                    }
                }
                if($num==0){
                    array_push($cities, $data);
                }   
            }
            
        }
        
        return view('frontend.who-is-voted', compact('cities', 'number_all_cities', 'participant'));
    }

    public function getRegions()
    {
        $id=$_POST['id'];
        $participant=Participant::findOrFail($id);
        $votes=$participant->votes;
        
        $client = new \GuzzleHttp\Client([
            'headers' => ['Content-Type' => 'application/json']
        ]);
        $regions=[];
        $num=0;
        foreach ($votes as $vote) {
            $url='http://api.ipstack.com/'.$vote->user_ip.'?access_key=ff895b339fe2b1e7cfee73f396cb673d&format=1';
            $response = $client->get($url);
            $response = json_decode($response->getBody(), true);
            $data['lat']=$response['latitude'];
            $data['lon']=$response['longitude'];
            $data['name']=$response['region_name'];
            $data['code']=$response['region_code'];
           
            //$data="'city".$num."' : { latitude : ".$response['latitude'].", longitude : ".$response['longitude'].", text: {content: ".$response['region_name']."}}";

            array_push($regions, $data);
            $num+=1;
        }
       return response()->json($regions);
    }

    public function appeal(Request $request)
    {
        
        
        $data = array(
            'type' => $request->type ?? null,
            'name' => $request->name ?? null,
            'addres' => $request->addres ?? null,
            'email' => $request->email ?? null,
            'msg' => $request->msg ?? null,
            'file' => $request->file ?? null
        );
       
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/appeals', $fayl);
            $data['file']=$fayl;
        }
        Appeal::create($data);
        
        
     Mail::to('375336062768@ya.ru')->send(new \App\Mail\Appeal($data));
        return back()->with('sended','success');

    }
    
    public function callBack(Request $request)
    {
        $data=$request->all();
        
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/appeals', $fayl);
            $data['file']=$fayl;
        }
        Appeal::create($data);
        
     Mail::to('375336062768@ya.ru')->send(new \App\Mail\CallBack($data));
        return back()->with('sended','success');

    }
    

    public function sendRecipe(Request $request)
    {
        $requestData=$request->all();
       
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/users/recipes', $fayl);
            $requestData['file']=$fayl;
        }
        \App\RecipesFromUser::create($requestData);
        return back();
    }

    public function sendStory(Request $request)
    {
        $requestData=$request->all();
       
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/users/stories', $fayl);
            $requestData['file']=$fayl;
        }
        \App\StoriesFromUser::create($requestData);
        return back();
    }

    public function orderProduct(Request $request)
    {
        $data=$request->all();

        \App\OrderProduct::create($data);
        
        
        Mail::to('375336062768@ya.ru')->send(new \App\Mail\Order($data));
        return back()->with('sended','success');
        
        return back();
    }
    
    public function getQuizProducts(Request $request)
    {
        
        $products=\App\QuizProduct::whereIn('quiz_category_id', $request->ids)->get();
        return view('components.quiz-slider', compact('products'));
    }
}
