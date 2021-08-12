var modalBtn=document.querySelector(".modal-btn");
var modalBtn1=document.querySelector(".modal-btn1");
var profil=document.querySelector(".profil");
var profils=document.querySelector(".profile-setting");
var close=document.querySelector(".modal-close");
var close1=document.querySelector(".modal-close1");

modalBtn.addEventListener("click",function(){
    
    profil.classList.add("profil-active");
});
close.addEventListener("click",function(){
    profil.classList.remove("profil-active");
});
modalBtn1.addEventListener("click",function(){
    
    profils.classList.add("profil-active1");
});
close1.addEventListener("click",function(){
    profils.classList.remove("profil-active1");
});