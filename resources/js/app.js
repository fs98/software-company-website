require('./bootstrap');

// Import Sweet Alert
import Swal from 'sweetalert2';
 
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle'; 

// import Swiper styles
import 'swiper/swiper-bundle.css';

// Confirm delete dialog
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

// Custom JS
window.onload = function() {
  
  // Swiper Init
  const swiper = new Swiper(".swiper-container", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true, 
    speed: 1000,
    autoplay: {
      delay: 2000,
      pauseOnMouseEnter: true,
      reverseDirection: true, 
    }, 
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 576px
      390: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      // when window width is >= 576px
      576: {
        slidesPerView: 3,
        spaceBetween: 0
      },
      // when window width is >= 750px
      800: {
        slidesPerView: 4,
        spaceBetween: 0
      },
      // when window width is >= 950px
      950: {
        slidesPerView: 5,
        spaceBetween: 0
      }, 
      // when window width is >= 1200px
      1200: {
        slidesPerView: 6,
        spaceBetween: 0
      },
      // when window width is >= 1500px
      1500: {
        slidesPerView: 7,
        spaceBetween: 0
      }
    }
  });
  
  // Aos Init
  AOS.init({
    once: true,
  });
}