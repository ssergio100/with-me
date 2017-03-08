<?php

namespace App\Http\Controllers\Painel;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Painel\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     */

    private $product;

    public function __construct( Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->all();
        $title = 'Listagem de produtos';
        return view('painel.products.index', compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = ['eletronicos','moveis','limpeza','banho'];
        $title = 'Listagem de produtos';
        return view('painel.products.create', compact('categorys','title'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($_POST);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $obj = $this->product;
        // dd($obj->find(5));
        //////////////////////////////////////////

        /*
        $obj = $this->product->find(5);
        $obj->name = 'Produto 2 updated';
        $obj->number = '22';
        $obj->active = 1;
        $obj->category = 'Eletronicos';
        $obj->description = 'Descricao produto 2';
        $obj->save();
    */
        /*
        $obj = $this->product->find(5);
        $update = $obj->update([
            'name' => 'Produto 3',
            'number' => '3333',
        ]);
        */
        $obj = $this->product
            ->where('number','3333')
            ->where('active',1);
        $update = $obj->update([
            'number' => '11',
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
