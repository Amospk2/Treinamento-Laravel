<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RequestClienteProduto;

use DB;
use App\Clienteprodutos;
use App\User;
use App\Post;

use Redirect;
use Session;
use DataTables;



class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Clienteprodutos::get();
        return view('Produtos.vendas.produtos', compact('produto'));
    }

    

}
