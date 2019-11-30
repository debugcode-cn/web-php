'use strict';
$(function(){
    var signUpButton = document.getElementById('signUp')
    var signInButton = document.getElementById('signIn')
    var container = document.getElementById('dowebok')

    if(signUpButton){
        signUpButton.addEventListener('click', function () {
            container.classList.add('right-panel-active')
        })
    }
    if(signInButton){
        signInButton.addEventListener('click', function () {
            container.classList.remove('right-panel-active')
        })
    }
});