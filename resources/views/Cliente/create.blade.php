<!-- http://treinamento.local/index -->
@extends('layouts.boxedL')

@section('htmlheader_title', 'Cadastro')
@section('contentheader_title', 'Cadastro')

@section('links_adicionais')  

@endsection


@section('conteudo')


<form method="POST" action="/cliente" id="cliente">

@if(Session::has('messagem'))
    <div class="alert {{Session::get('class')}} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
        <h5>Atenção</h5>
        {{Session::get('messagem')}}
    </div>  
    @endif


    @csrf

    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Informações gerais</h3>
            <div class="float-right">
                <a href="/cliente" class="btn btn-block btn-outline-info"> Gerenciar clientes</a>
            </div>  
        </div>


    <div class="card-body">

  

        <div class="row">

        <div class="form-group col-md-6">
            <strong>Nome<span style="color: red;">*</span></strong>   
            <input type="text" autocomplete="off" name="nome" class="form-control @error('nome') is-invalid @enderror"
            value="{{ old('nome') }}" placeholder="Nome">
            @error('nome')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>



        <div class="form-group col-md-6">
            <strong>Email<span style="color: red;">*</span></strong>   
            <input type="email" placeholder="email" id="i1" name="email" value="{{ old('email') }}" 
            autocomplete="off"  class="form-control @error('email') is-invalid @enderror"   >
            @error('email')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>



        <div class="form-group col-md-6">
            <strong>Senha<span style="color: red;">*</span></strong>   
            <input type="password" placeholder="password" name="password" 
            autocomplete="off"  class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
            @error('password')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
            <strong>Repita sua senha<span style="color: red;">*</span></strong>   
            <input type="password" placeholder="password"
            autocomplete="off"  class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
            @error('password')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>
        



        <div class="form-group col-md-6">
            <strong>Endereço<span style="color: red;">*</span></strong>   
            <input type="endereco" placeholder="endereco" name="endereco" 
            autocomplete="off" value="{{ old('endereco') }}" class="form-control @error('endereco') is-invalid @enderror"   >
            @error('endereco')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>

            


        <div class="form-group col-md-6">
            <strong>Data<span style="color: red;">*</span>  </strong>   
            <input type="date" placeholder="Ex 01/01/2000"  name="Date" 
            autocomplete="off" value="{{ old('Date') }}" class="form-control @error('Date') is-invalid @enderror"   >
            @error('Date')
            <div class="invalid-feedback" rule="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        </div>


        </div>
    </div>

            <div class="card card-outline card-primary">
             <div class="card-header">
                <h3 class="card-title">Informações pessoais</h3>
              </div>
              
            <div class="card-body">
                <div class="row">


                <div class="form-group col-md-6">
                        <strong>CPF<span style="color: red;">*</span></strong>   
                        <input type="text" placeholder="Ex 000.000.000-00" name="CPF" 
                        autocomplete="off"  class="form-control @error('CPF') is-invalid @enderror" value="{{ old('CPF') }}"
                        data-inputmask='"mask": "999.999.999-99"' data-mask>
                        @error('CPF')
                    <div class="invalid-feedback" rule="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                        <strong>RG<span style="color: red;">*</span></strong>   
                        <input type="text" placeholder="00.000.000-00"name="RG" 
                        autocomplete="off"  class="form-control @error('RG') is-invalid @enderror" value="{{ old('RG') }}">
                        @error('RG')
                    <div class="invalid-feedback" rule="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                        <strong>Telefone<span style="color: red;">*</span></strong>   
                        <input type="text" placeholder="00.000.000-00" name="Fone" 
                        autocomplete="off"  class="form-control @error('Fone') is-invalid @enderror" value="{{ old('Fone') }}"
                        data-inputmask='"mask": "(999) 99999-9999"' data-mask>
                        @error('Fone')
                        <div class="invalid-feedback" rule="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>



                <div class="form-group col-md-6">
                <strong>Genero<span style="color: red;">*</span></strong>   
                  <select class="form-control select2" style="width: 100%;" name="Genero" value="{{ old('Fone') }}">
                    <option value="M">Masculino</option>
                    <option value ="F">Feminino</option>
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


<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>

<script>
    $('[data-mask]').inputmask()
</script>
@endsection