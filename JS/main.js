
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
const BtnList=document.querySelector(".bars");
const Modal=document.querySelector('.modal');
BtnList.addEventListener('click',function(event){
 Modal.classList.add('open');
 ModalContainer.classList.remove('remove');
})
const Overlay=document.querySelector(".modal_overlay");
Overlay.addEventListener('click',function(event){
  Modal.classList.remove('open');
  ModalContainerRegister.classList.remove('open');
  modalLogin.classList.remove('open');
})

// modal register
const ModalContainer=document.querySelector(".modal_container");
const BtnRegister=document.querySelector(".js-register-btn");
const ModalContainerRegister=document.querySelector(".modal_container-register");
BtnRegister.addEventListener('click',function(event){
  ModalContainer.classList.add('remove');
  ModalContainerRegister.classList.add('open');
})
// modal btn-login
const btnLogin=document.querySelector(".js-login");
const modalLogin=document.querySelector(".modal_container-login");
// btnLogin.addEventListener('click',function(event){
//   ModalContainerRegister.classList.remove('open');
//   modalLogin.classList.add('open');
// })
// switch control
// dang ky
const switchLogin=document.querySelector('.js-btn-Login');
switchLogin.addEventListener('click',function(event){
  ModalContainerRegister.classList.remove('open');
  modalLogin.classList.add('open');
})

// dang nhap
const createAcc=document.querySelector(".js-btn-Register");
createAcc.addEventListener('click',function(event){
  modalLogin.classList.remove('open');
  ModalContainer.classList.add('remove');
  ModalContainerRegister.classList.add('open');
})