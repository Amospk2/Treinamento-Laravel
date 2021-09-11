$(document).ready(function ($) {
    var table = $("#table").DataTable({
        ajax:"gerenciar/list",
        scrollCollapse:true,
        responsive: true, 
        paging: true,
        processing:true,
        serverSide:true,
        deferRender:true,
        searching: true,
        "order":[0, 'ASC'],
        columns:[
            {data:"id", name:"id"},
            {data:"titulo", name:"titulo"},
            {data:"valor", name:"valor"},
            {data:"quantidade", name:"quantidade"},
            {data:"opcoes", name:"opcoes"},
        ],
    });


    $(document).on('click', '.delete', function(){
        var nome = $(this).data('nome');
        var id = $(this).data('id');
    
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'Tem certeza que deseja excluir ' + nome +'?',
            text: "Você não pederá reverter essa ação!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Confirmar',
            reverseButtons: false
          }).then((result) => {
            if (result.value) {
    
              $.ajax({
                type:"delete",
                url:"gerenciar/"+id,
                headers:{
                    "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data:{},
                success:function(data){
                    if(data.erro){
                        swalWithBootstrapButtons.fire(
                            'Atenção!',
                            'Um erro ocorreu no servidor! Exclusão cancelada, tente mais tarde.',
                            'error'
                          )
                    }else{
    
                        swalWithBootstrapButtons
                        .fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                          ).then(function(result){
                              if(result.value){
                                  $('#table').DataTable().draw(false);
                              }
                          })
                    }
                },
                error:function(){
                    swalWithBootstrapButtons.fire(
                        'Atenção!',
                        'Um erro ocorreu no servidor! Exclusão cancelada, tente mais tarde.',
                        'error'
                      )
                },
              });
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Atenção!',
                    'Exclusão cancelada!',
                    'error'
                  ) 
            }
          })
        });
  
  
        $(document).on('click', '.view', function(){
    
  
          document.getElementById('titulo').value = $(this).data("titulo");
          document.getElementById('descricao').value = $(this).data("descricao");
          document.getElementById('valor').value = $(this).data("valor");
          document.getElementById('quantidade').value = $(this).data("quantidade");
  
          
        });

        $("#select2").change(function(){
          for(let produtos of $(this).data("produtos")){
            if(produtos.id == $(this).val())
            {
              $("#valor").text(produtos.valor);
              $("#titulo").text(produtos.titulo);
              $("#descricao").text(produtos.descricao);
              $("#quant").attr({"max":produtos.quantidade});
            }
          }
      })
      
      
      $(document).on('click', '.comprar', function(){
      
            var quantidade = ($("#quant").val());
            var valor = ($("#valor").text());
          
              const swalWithBootstrapButtons = Swal.mixin({
                  customClass: {
                    confirmButton: 'btn btn-success',
                      cancelButton: 'btn btn-danger'
                  },
                  buttonsStyling: false
                })
                
                swalWithBootstrapButtons.fire({
                  title: 'Total a ser pago será de R$' + ( quantidade * valor),
                  text: "Disponivel em até 587x no cartão casas bahia xD",
                  icon: 'warning',
                  showCancelButton: true,
                  cancelButtonText: 'Cancelar',
                  confirmButtonText: 'Confirmar',
                  reverseButtons: false
                }).then((result) => {
                  if (result.value) {
                    swalWithBootstrapButtons
                    .fire(
                        'Compra realizada!',
                        'Aguarde até que o seu produto chegue a sua casa!',
                        'success'
                      ).then(function(result){
                          if(result.value){
                            window.location.href = "";
                          }
                      })
                  } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                  ) {
                      swalWithBootstrapButtons.fire(
                          'Atenção!',
                          'Compra cancelada!',
                          'error'
                        ) 
                  }
                })
              });
    


});
