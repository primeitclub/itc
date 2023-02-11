window.addEventListener('scroll',()=>{
    var header = document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY > 0)
})


//faq
var head = document.querySelectorAll(".faq_header");
head.forEach(head =>{
    head.addEventListener('click',event=>{
        head.classList.toggle("active");
        var body=head.nextElementSibling;
        if(head.classList.contains("active")){
            body.style.maxHeight=body.scrollHeight + "px"
        } else{
            body.style.maxHeight=0;
        }
    });                                 
})


//swiper
var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 4,
    spaceBetween: 10,
    centeredSlides: false,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination1",
      clickable: true,
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
    
  });

  //testimonials

  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: false,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination2",
      clickable: true,
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    },
    
  });