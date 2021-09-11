@extends('layouts.boxedL')

@section('htmlheader_title', 'Index')
@section('contentheader_title', 'Index')

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
                    <a href="/cliente/create" class="btn btn-block btn-outline-info"><i class="fas fa-user-plus"></i> Adicionar Cliente</a>
                    <button onclick="teste()"></button>
                </div>
            </div>
           
              <div class="card-body">
                <table id="table" class="table table-bordered table-hover" width="100%">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nome</th>
                      <th>email</th>
                      <th>Fone</th>
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
        @include("layouts.infos")
    </div>
</div>

@endsection

@section('scripts_adicionais') 

<script src="{{asset('js/treino_clientes.js')}}"></script>

<script>
    function teste()
    {
      console.log($('#table').DataTable().rows().data());
    }


</script>
@endsection
   


