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



class GerenciarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Clienteprodutos::get();
        return view('Produtos.crud.gerenciar', compact('produto'));
    }



    public function list()
    {
        $produtos =Clienteprodutos::get();
        return Datatables::of($produtos)->editColumn('opcoes', function($produtos){
            return '
            <td class="project-actions text-right">
            
            <a class="view btn btn-primary btn-sm" 

            data-titulo="'.$produtos->titulo.'" 
            data-valor="'.$produtos->valor.'" 
            data-quantidade="'.$produtos->quantidade.'" 
            data-descricao="'.$produtos->descricao.'" 

            href="#openModal">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>

                <a class="btn btn-info btn-sm change" href="/gerenciar/'.$produtos->id.'/edit">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>

                <button  class="delete btn btn-danger btn-sm" data-id="'.$produtos->id.'" data-nome="'.$produtos->titulo.'">
                    <i class="fas fa-trash">
                    </i>
                    Delete
            </button>
                
            </td>
'
            ;
        })->escapeColumns([0])->make(true);
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Clienteprodutos::destroy($id);

            Session::flash('messagem', 'Deletado kek');
            return response()->json(array('status'=>'OK'));

    }catch(\Exception $errors){

            Session::flash('messagem', 'Erro ao deletar kek');
            return response()->json(array('status'=>'$errors'));
    }
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Clienteprodutos::find($id);
        return view('Produtos.crud.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestClienteProduto $request, $id)
    {
        try{

            $produto =  Clienteprodutos::find($id);

            $produto->titulo = $request->titulo;
            $produto->descricao = $request->descricao;
            $produto->valor = $request->valor;
            $produto->quantidade = $request->quantidade;
    
            $produto->save();

            Session::flash('messagem', 'Cadastrado com sucesso xD');
            Session::flash('class', 'alert-success');
            return back()->withInput();

    }catch(\Exception $errors){

            Session::flash('messagem', 'Erros no cadastro');
            Session::flash('class', 'alert-danger');
            return back()->withInput();
    }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Produtos.crud.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestClienteProduto $request)
    {
        try{

            $produto = new Clienteprodutos();

            $produto->titulo = $request->titulo;
            $produto->descricao = $request->descricao;
            $produto->valor = $request->valor;
            $produto->quantidade = $request->quantidade;
    
            $produto->save();

            Session::flash('messagem', 'Cadastrado com sucesso xD');
            Session::flash('class', 'alert-success');
            return back()->withInput();

    }catch(\Exception $errors){

            Session::flash('messagem', 'Erros no cadastro');
            Session::flash('class', 'alert-danger');
            return back()->withInput();
    }

    }
}
