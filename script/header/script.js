document.addEventListener("DOMContentLoaded", () => {
    const popupLogin = document.getElementById('login-popup');
    const popupRegister = document.getElementById('register-popup');
    //const registerForm = document.getElementById('register-form');
    const profileLogin = document.querySelector('.profile.login');
    const registerBtn = document.querySelector('.register-btn');
    const loginBtn = document.querySelector('.login-btn');
    profileLogin.addEventListener("click", ()=> {
        popupLogin.classList.add("is-active");
    });

    registerBtn.addEventListener("click", ()=> {
        popupLogin.classList.remove("is-active");
        popupRegister.classList.add("is-active");
    });

    loginBtn.addEventListener("click", ()=> {
        popupLogin.classList.add("is-active");
        popupRegister.classList.remove("is-active");
    });

});