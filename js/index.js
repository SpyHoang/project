// Header-btn-Register/LogIn

const headerBtnRegister = document.getElementById('header-btn-register');
const headerBtnLogIn = document.getElementById('header-btn-log-in');

const modal = document.getElementById('modal');
const modalOverLay = document.getElementById('modal__overlay');

const authFormLogIn = document.getElementById('auth-form-log-in');
const authFormRegister = document.getElementById('auth-form-register');

headerBtnRegister.onclick = function headerRegister() {
    modal.style.display = "flex";
    authFormLogIn.style.display = "none";
}

headerBtnLogIn.onclick = function headerLogin() {
    modal.style.display = "flex";
    authFormRegister.style.display = "none";
}

modalOverLay.onclick = function modalOverLay() {
    modal.style.display = "none";
    authFormRegister.style.display = "block";
    authFormLogIn.style.display = "block";

}

// Auth-form-btn-Register/Login

const authFormBtnLogIn = document.getElementById('auth-form__switch-btn-log-in');
const authFormBtnRegister = document.getElementById('auth-form__switch-btn-register');
const authFormBtnBack1 = document.getElementById('auth-form__controls-back-1');
const authFormBtnBack2= document.getElementById('auth-form__controls-back-2');

authFormBtnLogIn.onclick = function authFormBtnLogIn() {
    authFormRegister.style.display = "none";
    authFormLogIn.style.display = "block";
}

authFormBtnRegister.onclick = function authFormBtnRegister() {
    authFormLogIn.style.display = "none";
    authFormRegister.style.display = "block";
}

function authFormBtnBack() {
    modal.style.display = "none";
    authFormRegister.style.display = "block";
    authFormLogIn.style.display = "block";
    authFormBtnRegister.reset(); 
}

authFormBtnBack1.onclick = authFormBtnBack

authFormBtnBack2.onclick = authFormBtnBack

// Auth-form-check

function checkEmail() {
    var email = document.getElementById("text_email").value;
    var error_email = document.getElementById("err_email");
    var rexEmail = /^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$/;
    if(email == ""){
      error_email.innerHTML = "*Vui lòng nhập đủ thông tin";
    }
    else if(!rexEmail.test(email)){
      error_email.innerHTML = "*Vui lòng nhập đúng định dạng";
    }else{
      error_email.innerHTML="";
      return email;
    }
}

function checkPass() {
    var pass = document.getElementById("text_pass").value;
    var error_pass = document.getElementById("err_pass");
    var rexPass = /\s/;
    if (pass == "") {
      error_pass.innerHTML = "* Vui lòng nhập đủ thông tin";
    }
    else if (pass.length < 8) {
        error_pass.innerHTML= "* Độ dài tối thiểu 8 kí tự";
    }
    else if (rexPass.test(pass)) {
      error_pass.innerHTML = "*Mật khẩu không được chưa dấu cách";
    } else {
      error_pass.innerHTML="";
      return pass;
    }
} 

function confirmPass() {
    var confirmPass = document.getElementById("confirm_pass").value;
    var error_confirm = document.getElementById("err_confirm");
    var rexConfirm = /\s/;
    var pass = checkPass();
    if(confirmPass == ""){
      error_confirm.innerHTML = "* Vui lòng nhập đủ thông tin";
    }
    else if (confirmPass.length < 8) {
        error_confirm.innerHTML= "* Độ dài tối thiểu 8 kí tự";
    }
    else if(rexConfirm.test(confirmPass)){
      error_confirm.innerHTML = "* Mật khẩu không được chưa dấu cách";
    }
    else if( confirmPass != pass){
      error_confirm.innerHTML = "* Mật khẩu không trùng khớp";
    }else{
      error_confirm.innerHTML="";
      return pass;
    }
}

// Category-List

var categoryList = document.getElementById('category-list');
var categoryItem = categoryList.getElementsByClassName('category-item');

for (var i = 0; i < categoryItem.length; i++) {
    categoryItem[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("catgory-item--active");
        current[0].className = current[0].className.replace(" catgory-item--active", "");
        this.className += " catgory-item--active";
    });
}

var homeFilter = document.getElementById("home-filter");
var homeFilterBtns = homeFilter.getElementsByClassName("home-filter__btn");

for (var i = 0; i < homeFilterBtns.length; i++) {
  homeFilterBtns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName(" btn--primary");
  current[0].className = current[0].className.replace(" btn--primary", "");
  this.className += " btn--primary";
  });
}