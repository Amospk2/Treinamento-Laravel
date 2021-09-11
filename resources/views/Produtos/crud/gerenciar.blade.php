
<!-- 
Aqui é o index, a pagina do DataTable com os produtos cadastrados e opções para editar, deletar e vizualizar;
-->

@extends('layouts.boxedL')

@section('htmlheader_title', 'Gerenciar')
@section('contentheader_title', 'Gerenciar')

@section('links_adicionais')  

@endsection


@section('conteudo')

 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gerenciar Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="float-right">
                  <a href="/gerenciar/create" class="btn btn-block btn-outline-info"> Adicionar produtos</a>
              </div>  
            </div>
           
              <div class="card-body">
              <table id="table" class="table table-bordered table-hover" width="100%">
                  <thead>
                    <tr>
                      <th>N</th>
                      <th>Titulo</th>
                      <th>Custo</th>
                      <th>Quantidade em estoque</th>
                      <th>opções</th>
                    </tr>

                  </thead>
                  <tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- /.row -->
      </section>
    <!-- /.content -->

    

    <div id="openModal" class="modalDialog">
    <div>
        <a href="#close"  class="close">X</a>
        @include("Produtos.crud.layouts.infos")
    </div>
</div>


@endsection

@section('scripts_adicionais') 

<script src="{{ asset('js/treino_produtos.js')}}"></script>


@endsection
   


