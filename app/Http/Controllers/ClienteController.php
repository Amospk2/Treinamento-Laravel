<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\RequestCliente;

use DB;
use App\Cliente;
use App\User;
use App\Post;

use Redirect;
use Session;
use DataTables;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::get();
        return view('Cliente.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCliente $request)
    {
        try{

            $cliente = new Cliente();

            $cliente->nome = $request->nome;
            $cliente->email = $request->email;
            $cliente->password = $request->password;
            $cliente->endereco = $request->endereco;
            $cliente->Date = $request->Date;
            $cliente->CPF = $request->CPF;
            $cliente->RG = $request->RG;
            $cliente->Fone = $request->Fone;
            $cliente->Genero =$request->Genero;
    
            $cliente->save();


            $user_now_id = Cliente::where('email', $request->email)->value('id');
            $use = new User();
            
            $use->id = $user_now_id;
            $use->email = $request->email;
            $use->password = bcrypt($request->password);
            $use->name =$request->nome;

            $use->save();

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function list()
    {
        $cliente =Cliente::get();
        return Datatables::of($cliente)->editColumn('opcoes', function($cliente){
            return '
            <td class="project-actions text-right">
            
            <a class="view btn btn-primary btn-sm" 

            data-nome="'.$cliente->nome.'" 
            data-email="'.$cliente->email.'" 
            data-password="'.$cliente->password.'" 
            data-endereco="'.$cliente->endereco.'" 
            data-date="'.$cliente->Date.'" 
            data-cpf="'.$cliente->CPF.'" 
            data-rg="'.$cliente->RG.'" 
            data-fone="'.$cliente->Fone.'" 
            data-genero="'.$cliente->Genero.'"
            href="#openModal">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>

                <a class="btn btn-info btn-sm change" href="/cliente/'.$cliente->id.'/edit">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>

                <button  class="delete btn btn-danger btn-sm" data-id="'.$cliente->id.'" data-nome="'.$cliente->nome.'">
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('Cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCliente $request, $id)
    {
        try{
            
        $cliente = Cliente::find($id);
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->password = $request->password;
        $cliente->endereco = $request->endereco;
        $cliente->Date = $request->Date;
        $cliente->CPF = $request->CPF;
        $cliente->RG = $request->RG;
        $cliente->Fone = $request->Fone;
        $cliente->Genero =$request->Genero;

        $cliente->save();


        $use = User::find($id);
            
        $use->email = $request->email;
        $use->password = bcrypt($request->password);
        $use->name =$request->nome;

        $use->save();



        Session::flash('messagem', 'Edição feito com sucesso');
        Session::flash('class', 'alert-success');
        return back()->withInput();

}catch(\Exception $errors){

        Session::flash('messagem', 'Erros na edição');
        Session::flash('class', 'alert-danger');
        return back()->withInput();
}
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
            Cliente::destroy($id);
    
                Session::flash('messagem', 'Deletado kek');
                return response()->json(array('status'=>'OK'));
    
        }catch(\Exception $errors){
    
                Session::flash('messagem', 'Erro ao deletar kek');
                return response()->json(array('status'=>'$errors'));
        }
    }



}
