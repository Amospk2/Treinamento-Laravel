<!-- 

Aqui é o modal usado para exibir as informações de um produto;

-->

<form>
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Cadastro de produtos</h3>
        </div>


    <div class="card-body">

    <div class="form-group">
            <strong>Titulo<span style="color: red;">*</span></strong>   
            <input  class="form-control" type="text" autocomplete="off" id="titulo" disabled>

        </div>

        <div class="row">
        <div class="form-group col-md-6">
            <strong>Valor<span style="color: red;">*</span></strong>   
            <input id="valor"  class="form-control" disabled>

    </div>

        <div class="form-group col-md-6">
            <strong>Quantidade<span style="color: red;">*</span></strong>   
            <input type="number" placeholder="quantidade" id="quantidade"  class="form-control" disabled>
 
        </div>
        </div>


        <div class="form-group">
            <strong>Descrisção<span style="color: red;">*</span></strong>   
            <textarea id="descricao"  class="form-control" rows="6" style="resize:none;" disabled></textarea>

        </div>


    </div>
    </div>

</form>