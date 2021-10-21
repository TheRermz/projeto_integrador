link = document.getElementById("t");
window.onscroll = function () {
    scrollFunction()
};
// button appears only if the page has scrolled more than 20 px
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        link.style.display = "block";
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
    const passwdType = document.getElementById("senha");
    //const icon = document.getElementById$("senha");
    if (passwdType.type === "password") {
        passwdType.type = "text";
        console.log(passwdType);


    } else {
        passwdType.type = "password";
        console.log(passwdType);

    }
}


// todo --> function to toggle different icons when btn showPasswd clicked
// function toggleEye() { 
//     const passwdType = document.getElementById("floatingPassword");
//     const eye = document.getElementById("passwdEye");

//     if (passwdType === "password") {
//         eye.setAttribute(feather.icons["eye-off"].toSvg());
//     } else {
//         eye.setAttribute(feather.icons["eye"].toSvg());
//     }
//     console.log(eye);

// }