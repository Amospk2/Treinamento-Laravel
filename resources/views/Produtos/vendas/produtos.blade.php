<!-- 
Aqui o usuario seleciona um produto e vizualiza suas informações e poderá escolher que quantidade deseja comprar.
-->
@extends('layouts.boxedL')

@section('htmlheader_title', 'Produtos')
@section('contentheader_title', 'Produtos')

@section('links_adicionais')  

@endsection


@section('conteudo')

<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title">Produtos</h3>
    <div class="float-right">
        <a href="/gerenciar" class="btn btn-block btn-outline-info"> Gerenciar produtos</a>
    </div>  
  </div>
  <div class="card-body">

    <div class="card">



            <div class="align-items-center mt-3 px-2">
            <h4>Produto:</h4>
            <select class="form-control select2" id="select2" style="width: 100%;" name="Genero" data-produtos="{{$produto}}">
              @foreach ($produto as $infos)
                  <option value="{{$infos->id}}" selected>{{$infos->titulo}}</option>
                @endforeach
            </select>
            </div>

              
            <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                <h2 id="titulo">{{$infos->titulo}}</h2>
            </div>

            <div class="d-flex align-items-center mt-3 px-2">
              <h5>Por R$:</h5>
              <h3 id="valor">{{$infos->valor}}</h3>
            </div>


            <div class="d-flex align-items-center mt-3 px-2">
              <h5>Quantidade:</h5>
              
              <div class="form-group col-md-1">
                <input value="1" type="number" id="quant" class="form-control" name="valor"  step="1" min="1" max="{{$infos -> quantidade}}">
              </div>
            </div>
                
          <div class="mt-2 px-2">
            <h4>Descrição:</h4>  
            <small id="descricao">{{$infos->descricao}}</small>
          </div>
            <div class="px-2 mt-3"> <button class="comprar btn btn-primary px-3">Comprar</button></div>
            <br>
        </div>
    </div>

</div>


@endsection

@section('scripts_adicionais')
<script src="{{ asset('js/treino_produtos.js')}}"></script>

@endsection