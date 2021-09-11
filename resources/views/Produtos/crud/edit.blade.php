<!-- 

Tela de edição dos produtos
-->
@extends('layouts.boxedL')

@section('htmlheader_title', 'Edição')
@section('contentheader_title', 'Edição')

@section('links_adicionais')  

@endsection


@section('conteudo')


<form method="POST" action="/gerenciar/{{$produto->id}}">

@if(Session::has('messagem'))
    <div class="alert {{Session::get('class')}} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
        <h5>Atenção</h5>    
        {{Session::get('messagem')}}
    </div>  
    @endif


@csrf
@method('PUT')
  
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Cadastro de produtos</h3>
        </div>


    <div class="card-body">
    <div class="form-group">
            <strong>Titulo<span style="color: red;">*</span></strong>   
            <input type="text" autocomplete="off" name="titulo" class="form-control @error('titulo') is-invalid @enderror"
            value="{{ $produto->titulo }}" placeholder="titulo">
            @error('titulo')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>

        <div class="row">
        <div class="form-group col-md-6">
            <strong>Valor<span style="color: red;">*</span></strong>   
            <input type="number" placeholder="valor" name="valor"  step=any
            autocomplete="off"  class="form-control @error('valor') is-invalid @enderror" value="{{$produto->valor }}">
            @error('valor')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>

        <div class="form-group col-md-6">
            <strong>Quantidade<span style="color: red;">*</span></strong>   
            <input type="number" placeholder="quantidade" name="quantidade" 
            autocomplete="off" value="{{ $produto->quantidade }}" class="form-control @error('quantidade') is-invalid @enderror"   >
            @error('quantidade')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>

</div>


        <div class="form-group">
            <strong>Descrisção<span style="color: red;">*</span></strong>   
            <textarea type="descricao" placeholder="descricao" name="descricao"  rows="5"
            autocomplete="off"  class="form-control @error('descricao') is-invalid @enderror" style="resize:none;">{{$produto->descricao}}</textarea>
            @error('descricao')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>
    </div>
    </div>


        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

</form>
@endsection

@section('scripts_adicionais')



@endsection