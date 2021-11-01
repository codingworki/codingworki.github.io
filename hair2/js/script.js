document.addEventListener("DOMContentLoaded", () => {
  new Swiper(".carousel__inner", {
    speed: 400,
    autoplay: {
      delay: 5000,
    },
    slidesPerView: 1,
    loop: true,
  });

  new Swiper(".gallery__slider", {
    speed: 400,
     autoplay: {
     delay: 2000,
     },
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: ".gallery__pagination",
      dynamicBullets: true,
    },
  });

  new Swiper(".otz__slider", {
    speed: 400,
    autoplay: {
      delay: 2000,
    },
    slidesPerView: 1,
    loop: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: "auto",
        centeredSlides: true,
      },
      // when window width is >= 640
      640: {
        slidesPerView: 2,
      },
      // when window width is >= 1200
      1200: {
        slidesPerView: 3,
      },
    },
  });

  document.querySelectorAll('.icons').forEach((icon) => {
     const image = icon.querySelector(".image__pic");
     
     icon.querySelectorAll(".ellipse").forEach(ellipse => {
          ellipse.addEventListener('click', (e) => {
              image.classList.remove("animate__animated", "animate__fadeIn");
              image.setAttribute(
                "class",
                "image__pic"
              );

               image.setAttribute('src', ellipse.getAttribute("data-ellipse-img"));
               image.classList.add(
                 ellipse.getAttribute("data-color"),
                 "animate__animated",
                 "animate__fadeIn"
               );

               setTimeout(() => {
                 image.classList.remove(
                   "animate__animated",
                   "animate__fadeIn"
                 );
               }, 1000)

          });
     });


     image.addEventListener("mouseover", () => {
          image.classList.contains("image__pic") &&
            image.classList.length === 1 &&
            image.setAttribute(
              "src",
              image.getAttribute("data-other-img")
            );
          const colorClassName = image.classList[1];

          image.classList.contains(colorClassName) &&
            image.setAttribute(
              "src",
              icon
                .querySelector(`.ellipse.${colorClassName}`)
                .getAttribute("data-other-img")
            );
       });

     image.addEventListener("mouseout", () => {  
          image.classList.contains("image__pic") &&
            image.classList.length === 1 &&
            image.setAttribute("src", image.getAttribute("data-default-img"));

          const colorClassName = image.classList[1]
          image.classList.contains(colorClassName) &&
            image.setAttribute(
              "src",
              icon
                .querySelector(`.ellipse.${colorClassName}`)
                .getAttribute("data-ellipse-img")
            );
     });

  })


  const burger = document.querySelector(".header__burger");
  const link = document.querySelector(".header__link");
  const tap = document.querySelector(".tap");
  const btnPulse = document.querySelector(".button__pluse");
  const modalClose = document.querySelector(".modal__close");

  burger.addEventListener('click', (e) => {
    document.querySelector(".header__menu").classList.toggle("active");
  })

  link.addEventListener("click", (e) => {
    document.querySelector(".header__menu").classList.remove("active");
  });
  
  // tap.addEventListener("click", (e) => {
  //   document.querySelector(".catalog__list").classList.toggle("active");
  //   document.querySelector(".icon1").classList.toggle("active");
  // });

  btnPulse.addEventListener("click", (e) => {
    document.querySelector(".overlay").classList.toggle("show");
    document.querySelector("#modal1").classList.toggle("show");
    btnPulse.classList.toggle("hide");
  });

  modalClose.addEventListener("click", (e) => {
    document.querySelector(".overlay").classList.toggle("show");
    document.querySelector("#modal1").classList.toggle("show");
    btnPulse.classList.toggle("hide");
  });


});

