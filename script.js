const registerForm = document.getElementById("registerForm");

if (registerForm) {
    registerForm.addEventListener("submit", function (event) {

        let name = document.getElementById("name").value.trim();
        let mobile = document.getElementById("mobile").value.trim();
        let email = document.getElementById("email").value.trim();
        let password = document.getElementById("password").value.trim();
        let dob = document.getElementById("dob").value;

        if (
            name === "" ||
            mobile === "" ||
            email === "" ||
            password === "" ||
            dob === ""
        ) {
            event.preventDefault();
            alert("Please fill all fields");
            return;
        }

        if (mobile.length !== 10) {
            event.preventDefault();
            alert("Mobile number must be 10 digits");
            return;
        }

        if (password.length < 6) {
            event.preventDefault();
            alert("Password must be at least 6 characters");
            return;
        }
    });
}


// Contact Form

const contactForm = document.getElementById("contactForm");

if (contactForm) {

    contactForm.addEventListener("submit", function(event) {

        let course = document.getElementById("course").value.trim();
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let message = document.getElementById("message").value.trim();

        if (
            course === "" ||
            name === "" ||
            email === "" ||
            message === ""
        ) {
            event.preventDefault();
            alert("Please fill all fields");
            return;
        }
    });

}
//theme
const themeBtn = document.getElementById("theme");

themeBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){
        themeBtn.textContent = "\u2600";
    } else {
        themeBtn.textContent = "\u23FE";
    }
});

const menuBtn = document.getElementById("menubtn");
const navbar = document.getElementById("navbar");

if(menuBtn){

    menuBtn.addEventListener("click",function(){

        navbar.classList.toggle("show");

        if(menuBtn.innerHTML==="☰"){

            menuBtn.innerHTML="✖";

        }

        else{

            menuBtn.innerHTML="☰";

        }
    });

}

const navLinks = document.querySelectorAll("#navbar a");

navLinks.forEach(link => {
    link.addEventListener("click", () => {
        navbar.classList.remove("show");

        const icon = menuBtn.querySelector("i");
        icon.classList.remove("fa-xmark");
        icon.classList.add("fa-bars");
    });
});
