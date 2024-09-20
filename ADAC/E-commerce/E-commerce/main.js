
let loginModal = document.getElementById("loginModal");
let signupModal = document.getElementById("signupModal");


let loginBtn = document.getElementById("openLoginModalBtn");
let signupBtn = document.getElementById("openSignupModalBtn");


let loginClose = document.getElementsByClassName("login-close")[0];
let signupClose = document.getElementsByClassName("signup-close")[0];


loginBtn.onclick = function() {
    loginModal.style.display = "block";
}


signupBtn.onclick = function() {
    signupModal.style.display = "block";
}


loginClose.onclick = function() {
    loginModal.style.display = "none";
}


signupClose.onclick = function() {
    signupModal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    }
    if (event.target == signupModal) {
        signupModal.style.display = "none";
    }
}

let btn = document.querySelectorAll('.signup-btn')
document.addeventlistener('onclick',  (btn)=>{
   console.log('button clicked')
})

function checkPWd()
{
    pwd =document.getElementsByName('password')[0];
    cpwd = document.getElementsByName('cpassword')[0];
    if(pwd !== cpwd)
    {
        alert("Password and Confirm Password does not match");
        return false;
    }
     return true;

}
 