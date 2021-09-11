@extends('layouts.boxedL')

@section('htmlheader_title', 'Edição')
@section('contentheader_title', 'Edição')

@section('links_adicionais')  

@endsection


@section('conteudo')

<form method="POST" action="/cliente/{{$cliente->id}}">
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
            <h3 class="card-title">Informações pessoais</h3>
        </div>


    <div class="card-body">

  

        <div class="row">

        <div class="form-group col-md-6">
            <strong>Nome<span style="color: red;">*</span></strong>   
            <input type="text" autocomplete="off" name="nome" id="i0" class="form-control @error('nome') is-invalid @enderror"
            value="{{ $cliente->nome}}" placeholder="Nome">
            @error('nome')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>



        <div class="form-group col-md-6">
            <strong>Email<span style="color: red;">*</span></strong>   
            <input type="email" placeholder="email" id="i1" name="email" value="{{ $cliente->email }}" 
            autocomplete="off"  class="form-control @error('email') is-invalid @enderror"   >
            @error('email')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>



        <div class="form-group col-md-6">
            <strong>Senha<span style="color: red;">*</span></strong>   
            <input type="password" placeholder="password" id="i2" name="password" 
            autocomplete="off"  class="form-control @error('password') is-invalid @enderror" value="{{ $cliente->password }}">
            @error('password')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
            <strong>Repita sua senha<span style="color: red;">*</span></strong>   
            <input type="password" placeholder="password" id="i3" 
            autocomplete="off"  class="form-control @error('password') is-invalid @enderror" value="{{ $cliente->password }}">
            @error('password')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>
        



        <div class="form-group col-md-6">
            <strong>Endereco</strong>   
            <input type="endereco" placeholder="endereco" id="i4" name="endereco" 
            autocomplete="off" value="{{ $cliente->endereco }}" class="form-control @error('endereco') is-invalid @enderror"   >
            @error('endereco')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>

            


        <div class="form-group col-md-6">
            <strong>Data</strong>   
            <input type="date" placeholder="Ex 01/01/2000"  id="i5" name="Date" 
            autocomplete="off" value="{{ $cliente->Date }}" class="form-control @error('Date') is-invalid @enderror"   >
            @error('Date')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>


        </div>
    </div>

        <div class="card card-danger">
             <div class="card-header">
                <h3 class="card-title">Informações pessoais</h3>
              </div>
              
            <div class="card-body">
                <div class="row">


                <div class="form-group col-md-6">
                        <strong>CPF<span style="color: red;">*</span></strong>   
                        <input type="text" placeholder="Ex 000.000.000-00" id="i6" name="CPF" 
                        autocomplete="off"  class="form-control @error('CPF') is-invalid @enderror" value="{{ $cliente->CPF}}"
                        data-inputmask='"mask": "999.999.999-99"' data-mask>
                        @error('CPF')
                    <div class="invalid-feedback" rule="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                        <strong>RG<span style="color: red;">*</span></strong>   
                        <input type="text" placeholder="00.000.000-00"id="i7" name="RG" 
                        autocomplete="off"  class="form-control @error('RG') is-invalid @enderror" value="{{ $cliente->RG }}">
                        @error('RG')
                    <div class="invalid-feedback" rule="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                        <strong>Telefone<span style="color: red;">*</span></strong>   
                        <input type="text" placeholder="00.000.000-00"id="i8" name="Fone" 
                        autocomplete="off"  class="form-control @error('Fone') is-invalid @enderror" value="{{ $cliente->Fone}}"
                        data-inputmask='"mask": "(999) 99999-9999"' data-mask>
                        @error('Fone')
                        <div class="invalid-feedback" rule="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>



                <div class="form-group col-md-6">
                <strong>Genero</strong>   
                  <select class="form-control select2" style="width: 100%;" id="i9" name="Genero">
                     <option value="M"  {{ ( $cliente->Genero == 'M') ? 'selected' : ''}}>Masculino</option>
                    <option value ="F" {{ ( $cliente->Genero == 'F') ? 'selected' : ''}}>Feminino</option>
                  </select>
                </div>



                </div>
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
   


