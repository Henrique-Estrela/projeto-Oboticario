function deletar($id) {
  
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  swalWithBootstrapButtons.fire({
    title: 'Você quer mesmo apagar esse registro?',
    text: "tem certeza?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'sim, pode deletar!',
    cancelButtonText: 'Não, cancele!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
        
      swalWithBootstrapButtons.fire(
        'Deletado!',
        'Seu produto foi deletado com sucesso!',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelado',
        'venda não apagada :)',
        'error'
      )
    }
  })
}