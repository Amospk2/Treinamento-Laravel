
<!-- 

Aqui é o modal usado para exibir as informações de um cliente;

-->
<form id="formulario">
@if(Session::has('messagem'))
    <div class="alert {{Session::get('class')}} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
        <h5>Atenção</h5>
        {{Session::get('messagem')}}
    </div>  
    @endif

  

<div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Informações pessoais</h3>
        </div>


    <div class="card-body">

  

        <div class="row">

        <div class="form-group col-md-6">
            <strong for="nome">Nome<span style="color: red;">*</span></strong>   
            <input type="text" id="nome" class="form-control"
 disabled>

        </div>



        <div class="form-group col-md-6">
            <strong>Email<span style="color: red;">*</span></strong>   
            <input type="email" id="email"class="form-control"disabled>

        </div>



        <div class="form-group col-md-6">
            <strong >Senha<span style="color: red;">*</span></strong>   
            <input type="password" id="password"  class="form-control" disabled>
  
    </div>

        



        <div class="form-group col-md-6">
            <strong>Endereço</strong>   
            <input type="endereco"  id="endereco" class="form-control" disabled>

        </div>

            


        <div class="form-group col-md-6">
            <strong>Data</strong>   
            <input type="date"  id="Date" class="form-control" disabled>

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
                        <input type="text" id="CPF"   class="form-control"  disabled>
     
                </div>

                <div class="form-group col-md-6">
                        <strong>RG<span style="color: red;">*</span></strong>   
                        <input type="text" id="RG"  class="form-control " disabled>
   
                </div>

                <div class="form-group col-md-6">
                        <strong>Telefone<span style="color: red;">*</span></strong>   
                        <input type="text" id="Fone"  class="form-control" disabled>

                </div>



                <div class="form-group col-md-6">
                <strong>Genero</strong>   
                  <select class="form-control select2" style="width: 100%;" id="Genero" name="Genero" value="old('Genero')" disabled>
                     <option value="M">Masculino</option>
                    <option value ="F">Feminino</option>
                  </select>
                </div>



                </div>
            </div>    
       
        </div>
    </div>

</form>




