<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ Stock;
use App\Participant;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $stocks = Stock::where('type', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_by', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('body_ru', 'LIKE', "%$keyword%")
                ->orWhere('body_by', 'LIKE', "%$keyword%")
                ->orWhere('body_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $stocks = Stock::latest()->paginate($perPage);
        }

        return view('admin.stocks.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/stocks', $image);
            $requestData['image']=$image;
        }
        if($request->hasFile('image_fon')){
            $file=$request->file('image_fon');
            $image_fon=time().$file->getClientOriginalName();
            $file->move('images/stocks', $image_fon);
            $requestData['image_fon']=$image_fon;
        }

        if($request->hasFile('rules')){
            $file=$request->file('rules');
            $rules=time().$file->getClientOriginalName();
            $file->move('images/stocks', $rules);
            $requestData['rules']=$rules;
        }

        if($request->hasFile('state')){
            $file=$request->file('state');
            $state=time().$file->getClientOriginalName();
            $file->move('images/stocks', $state);
            $requestData['state']=$state;
        }
        Stock::create($requestData);

        return redirect('admin/stocks')->with('flash_message', 'Stock added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $stock = Stock::findOrFail($id);

        return view('admin.stocks.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);

        return view('admin.stocks.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/stocks', $image);
            $requestData['image']=$image;
        }
        if($request->hasFile('image_fon')){
            $file=$request->file('image_fon');
            $image_fon=time().$file->getClientOriginalName();
            $file->move('images/stocks', $image_fon);
            $requestData['image_fon']=$image_fon;
        }

        if($request->hasFile('rules')){
            $file=$request->file('rules');
            $rules=time().$file->getClientOriginalName();
            $file->move('images/stocks', $rules);
            $requestData['rules']=$rules;
        }

        if($request->hasFile('state')){
            $file=$request->file('state');
            $state=time().$file->getClientOriginalName();
            $file->move('images/stocks', $state);
            $requestData['state']=$state;
        }
        $stock = Stock::findOrFail($id);
        $stock->update($requestData);

        return redirect('admin/stocks')->with('flash_message', 'Stock updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Stock::destroy($id);

        return redirect('admin/stocks')->with('flash_message', 'Stock deleted!');
    }

    public function competitions()
    {
        $competitions=Stock::where('type', '=', 'competition')->get();
        $participants=Participant::all();
        return view('admin.stocks.competitions', compact('competitions', 'participants'));
    }
    public function addParticipant($id)
    {
        $competition=Stock::findOrFail($id);
        
        return view('admin.stocks.add-participant', compact('competition'));
    }
    public function saveParticipant(Request $request, $id)
    {
        $competition=Stock::findOrFail($id);
            
        for ($i=0; $i <count($request->name_ru) ; $i++) { 
            
            $data=[
                'name_ru'=>$request->name_ru[$i],
                'name_by'=>$request->name_by[$i],
                'name_en'=>$request->name_en[$i],
                'desc_ru'=>$request->desc_ru[$i],
                'desc_by'=>$request->desc_by[$i],
                'desc_en'=>$request->desc_en[$i],
                'point'=>$request->point[$i],
                'competition_id'=>$id,
            ];
            if (isset($request->images[$i])) {
                $file=$request->images[$i];
                $image=time().$file->getClientOriginalName();
                $file->move('images/competitions/participiants', $image);
                $data['image']=$image;
            }
            if(empty($request->part_id[$i])){
                Participant::create($data);
            }else{
                Participant::find($request->part_id[$i])->update($data);
            }
               
            
        }
        return redirect('/admin/competitions')->with('flash_message', 'участник добавлен!');;
    }
    public function participantDelete(Request $request)
    {
        Participant::destroy($request->part_id);
        
    }
}
