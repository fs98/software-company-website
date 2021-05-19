require('./bootstrap');

import Swal from 'sweetalert2';

// window.deleteConfirm = function(formId)
// {
//     Swal.fire({
//         icon: 'warning',
//         text: 'Jeste li sigurni da želite izbrisati?',
//         showCancelButton: true,
//         cancelButtonText: 'Nisam siguran, odustani.',
//         confirmButtonText: 'Izbriši',
//         confirmButtonColor: '#e3342f',
//     }).then((result) => {
//         if (result.isConfirmed) {
//             document.getElementById(formId).submit();
//         }
//     });
// }

window.deleteConfirm = function(formId)
{
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger mr-2'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'Jeste li sigurni?',
    text: "Ove podatke ne možete vratiti!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Da, izbriši!',
    cancelButtonText: 'Ne, odustani!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById(formId).submit();
      swalWithBootstrapButtons.fire(
        'Izbrisano!',
        'Korisnik je izbrisan.',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Prekinuto',
        'Korisnik nije izbrisan! :)',
        'error'
      )
    }
  })
}