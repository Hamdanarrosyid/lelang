<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $goods = Goods::all();

        return view('goods',compact('goods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
//        return 'hello memek';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Goods::create($request->all());
        return redirect()->route('goods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Goods $goods
     * @return Response
     */
    public function show(Goods $goods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Goods $goods
     * @return Application|Factory|View|Response
     */
    public function edit(Goods $good)
    {
        return view('edit-goods',compact('good'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Goods $goods
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Goods $good): \Illuminate\Http\RedirectResponse
    {
        Goods::where('id',$good->id)->update($request->except(['_token','_method']));
        return redirect()->route('goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Goods $good
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Goods $good): \Illuminate\Http\RedirectResponse
    {
        Goods::where('id',$good->id);
        $good->delete();

        return redirect()->route('goods.index');
    }
}
