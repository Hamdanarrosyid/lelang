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
     * @return Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Goods $goods
     * @return Response
     */
    public function show(Goods $goods): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Goods $goods
     * @return Response
     */
    public function edit(Goods $goods): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Goods $goods
     * @return Response
     */
    public function update(Request $request, Goods $goods): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Goods $goods
     * @return Response
     */
    public function destroy(Goods $goods): Response
    {
        //
    }
}
