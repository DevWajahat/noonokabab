// eye button js
const eyeBtns = document.querySelectorAll(".eye-btn");

eyeBtns.forEach((eyeBtn) => {
    eyeBtn.addEventListener("click", () => {
        const myInput = eyeBtn.previousElementSibling; 
        const icon = eyeBtn.querySelector("i");

        if (myInput.type === "password") {
            myInput.type = "text";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        } else {
            myInput.type = "password";
            icon.classList.add("fa-eye-slash");
            icon.classList.remove("fa-eye");
        }
    });
});