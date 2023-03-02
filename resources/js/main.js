// import Swiper JS
import Swiper from 'swiper/bundle';
// import Swiper styles
import 'swiper/css/bundle';


const swiper = new Swiper('.swiper', {
   // Optional parameters
   loop: true,
   autoplay: false,
   slidesPerView: 3,
   slidesPerGroup: 3,
   spaceBetween: 32,
   navigation: false,
   pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 50px
      50: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 40
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
        spaceBetween: 40
      },
    },
})




// //  var swiper = new Swiper(".swiper", {
// //    loop: true,
// //    centeredSlides: false,
// //    slidesPerView: 3,
// //   //  autoplay: {
// //   //     delay: 2500,
// //   //     disableOnInteraction: false
// //   //   },
// //     breakpoints: {
// //       // // when window width is >= 50px
// //       // 50: {
// //       //   slidesPerView: 1,
// //       //   spaceBetween: 20
// //       // },
// //       // // when window width is >= 320px
// //       // 320: {
// //       //   slidesPerView: 1,
// //       //   spaceBetween: 0
// //       // },
// //       // // when window width is >= 480px
// //       // 480: {
// //       //   slidesPerView: 2,
// //       //   spaceBetween: 30
// //       // },
// //       // // when window width is >= 640px
// //       // 640: {
// //       //   slidesPerView: 2,
// //       //   spaceBetween: 40
// //       // },
// //       // // when window width is >= 1024px
// //       // 1024: {
// //       //   slidesPerView: 3,
// //       //   spaceBetween: 40
// //       // },
// //       1280: {
// //         slidesPerView: 3,
// //         spaceBetween: 5
// //       }
// //     },
// //     breakpointsBase: 'container',
// //     pagination: {
// //       el: '.swiper-pagination',
// //       type: 'bullets',
// //       clickable: true,
// //     },
// //     // setWrapperSize: true,
// //  });

 
 var swiper2 = new Swiper(".swiper2", {
   loop: true,
   centeredSlides: true,
   slidesPerView: "auto",
   slidesPerGroup: 3,
  //  autoplay: {
  //     delay: 2500,
  //     disableOnInteraction: false
  //   },
    breakpoints: {
      // // when window width is >= 50px
      // 50: {
      //   slidesPerView: 1,
      //   spaceBetween: 20
      // },
      // // when window width is >= 320px
      // 320: {
      //   slidesPerView: 1,
      //   spaceBetween: 0
      // },
      // when window width is >= 480px
      // 480: {
      //   slidesPerView: 3,
      //   spaceBetween: 30
      // },
      // // when window width is >= 640px
      // 640: {
      //   slidesPerView: 2,
      //   spaceBetween: 40
      // },
      // // when window width is >= 1024px
      // 1024: {
      //   slidesPerView: 3,
      //   spaceBetween: 40
      // },
      1280: {
        slidesPerView: 3,
        spaceBetween: 5
      },
    },
    // breakpointsBase: 'container',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    // setWrapperSize: true,
 });

let toggle_button = document.querySelector('[area-toggle]');

let area_mainmenu = document.querySelector('#area-mainmenu');

toggle_button.addEventListener('click', function () {
  area_mainmenu.classList.toggle('hide');
});

document.addEventListener('click', function (e) {
  if (!e.target.closest('#area-mainmenu') && !e.target.closest('[area-toggle]')) {
    area_mainmenu.classList.toggle('hide');
  }
});




let deviceWidth = window.outerWidth;

window.addEventListener('resize', function () {

    if (deviceWidth < 320) {
   
        let toggler = this.document.querySelector('#toggler');
    
        if (toggler.classList.contains = 'swiper2') {
            toggler.classList.remove('swiper2');
            toggler.classList.add('swiper3');
        }
    }

})