
// validation de Registre 

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("reg-form").onsubmit = function(e) {
        const emailInput = document.getElementById('reg-email');
        const passInput = document.getElementById('reg-password');
        const VpassInput = document.getElementById('v-reg-password');
        const nameInput = document.getElementById('reg-username');

        const passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,24}$/;
        const emailPattern = /^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]+$/;


        if (emailPattern.test(emailInput.value) && passPattern.test(passInput.value) && passInput.value === VpassInput.value && nameInput.value.length <= 50) {
          
            console.log('Valid');
        } else {
            
            e.preventDefault();
          alert("some thing wrong !");
        }
    };
});     
const passwordInput = document.getElementById('reg-password');
const textMutedElements = document.getElementsByClassName('text-muted');

passwordInput.addEventListener('mouseenter', function(e) {
        textMutedElements[0].style.display = "block";
});
passwordInput.addEventListener('mouseleave', function(e) {
        textMutedElements[0].style.display = "none";
});


