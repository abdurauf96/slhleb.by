<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sertificat;
use Illuminate\Http\Request;

class SertificatsController extends Controller
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
            $sertificats = Sertificat::where('sertificat', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sertificats = Sertificat::latest()->paginate($perPage);
        }

        return view('admin.sertificats.index', compact('sertificats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sertificats.create');
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
        if ($request->hasFile('sertificat')) {
            $file=$request->file('sertificat');
            $sertificat=time().$file->getClientOriginalName();
            $file->move('images/sertificats', $sertificat);
            $requestData['sertificat']=$sertificat;
        }
        Sertificat::create($requestData);

        return redirect('admin/sertificats')->with('flash_message', 'Sertificat added!');
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
        $sertificat = Sertificat::findOrFail($id);

        return view('admin.sertificats.show', compact('sertificat'));
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
        $sertificat = Sertificat::findOrFail($id);

        return view('admin.sertificats.edit', compact('sertificat'));
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
        if ($request->hasFile('sertificat')) {
            $file=$request->file('sertificat');
            $sertificat=time().$file->getClientOriginalName();
            $file->move('images/sertificats', $sertificat);
            $requestData['sertificat']=$sertificat;
        }
        $sertificat = Sertificat::findOrFail($id);
        $sertificat->update($requestData);

        return redirect('admin/sertificats')->with('flash_message', 'Sertificat updated!');
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
        Sertificat::destroy($id);

        return redirect('admin/sertificats')->with('flash_message', 'Sertificat deleted!');
    }
}
