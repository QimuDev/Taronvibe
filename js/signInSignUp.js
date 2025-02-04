document.addEventListener("DOMContentLoaded", function () {
    const signInButton = document.getElementById("signIn");
    const signUpButton = document.getElementById("signUp"); 
    const form = document.getElementById("loginForm");
    const textContainer = document.querySelector(".textContainer"); 

    function handleClick(event) {
        event.preventDefault(); 

        textContainer.style.transition = "transform 1.7s";
        textContainer.style.transform = "rotate(360deg)";

        setTimeout(function() {
            document.body.style.transition = "opacity 0.5s ease-in-out";
            document.body.style.opacity = "0";

            setTimeout(function() {
                form.submit();
            }, 300); 
        }, 1900); 
    }

    if (signInButton) {
        signInButton.addEventListener("click", handleClick);
    }

    if (signUpButton) {
        signUpButton.addEventListener("click", handleClick);
    }
});
