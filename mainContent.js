const btnthongtinchung=document.querySelector(".js-content1");
const btnlichtrinh=document.querySelector('.js-content2');
const btnImg=document.querySelector('.js-content3');
const btnPolicy=document.querySelector('.js-content4');
const btnPay=document.querySelector('.js-content5');
const content1=document.querySelector(".js-content-body-switch-1");
const content2=document.querySelector(".js-content-body-switch-2");
const content3=document.querySelector(".js-content-body-switch-3");
const content4=document.querySelector(".js-content-body-switch-4");
const content5=document.querySelector(".js-content-body-switch-5");
btnthongtinchung.addEventListener('click',function(event){
  content1.classList.add('open');
  content2.classList.remove('open');
  content3.classList.remove('open');
  content4.classList.remove('open');
  content5.classList.remove('open');
})

btnlichtrinh.addEventListener('click',function(event){
      content1.classList.remove('open');
      content1.classList.add('off');
      content2.classList.add('open');
      content3.classList.remove('open');
      content4.classList.remove('open');
      content5.classList.remove('open');
})
btnImg.addEventListener('click',function(event){
  content1.classList.remove('open');
  content1.classList.add('off');
  content2.classList.remove('open');
  content3.classList.add('open');
  content4.classList.remove('open');
  content5.classList.remove('open');
})
btnPolicy.addEventListener('click',function(event){
  content1.classList.remove('open');
  content1.classList.add('off');
  content2.classList.remove('open');
  content3.classList.remove('open');
  content4.classList.add('open');
  content5.classList.remove('open');
})
btnPay.addEventListener('click',function(event){
  content1.classList.remove('open');
  content1.classList.add('off');
  content2.classList.remove('open');
  content3.classList.remove('open');
  content4.classList.remove('open');
  content5.classList.add('open');
})