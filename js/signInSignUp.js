document.addEventListener("DOMContentLoaded", function () {

    const signInButton = document.getElementById("signIn");
    const signUpButton = document.getElementById("signUp"); 
    const form = document.getElementById("loginForm");
    const textContainer = document.querySelector(".textContainer"); 

    if (signInButton) {
        signInButton.addEventListener("click", function(event){
            event.preventDefault(); 

            textContainer.style.transition = "transform 1.7s";
            textContainer.style.transform = "rotate(360deg)";

            setTimeout(function() {
                form.submit(); 
            }, 1900); 
        });
    }

    if (signUpButton) {
        signUpButton.addEventListener("click", function(event){ 
            event.preventDefault(); 

            textContainer.style.transition = "transform 1.7s";
            textContainer.style.transform = "rotate(360deg)";

            setTimeout(function() {
                form.submit(); 
            }, 1900); 
        });
    }

});
