$(document).ready(function ($) {
  var table = $("#table").DataTable({
      ajax: "cliente/list",  
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
          {data:"nome", name:"nome"},
          {data:"email", name:"email"},
          {data:"Fone", name:"Fone"},
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
            url:"cliente/"+id,
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


      document.getElementById('nome').value = $(this).data("nome");
      document.getElementById('email').value = $(this).data("email");
      document.getElementById('password').value = $(this).data("password");
      document.getElementById('endereco').value = $(this).data("endereco");
      document.getElementById('Date').value = $(this).data("date");
      document.getElementById('CPF').value = $(this).data("cpf");
      document.getElementById('RG').value = $(this).data("rg");
      document.getElementById('Fone').value = $(this).data("fone");
      document.getElementById('Genero').value = $(this).data("genero");

      
    });




});   
