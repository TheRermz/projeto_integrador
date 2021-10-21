link = document.getElementById("t");
window.onscroll = function () {
    scrollFunction()
};
// botão so aparece se der um scroll > 20px
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        link.style.display = "block";
        link.style.transition = "all 2 0 ease-in-out"
    } else {
        link.style.display = "none";
    }
}

//scroll back to top
function gotoTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// show passwd function

function showPasswd() {
    var x = document.getElementById("floatingPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
