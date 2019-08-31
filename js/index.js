function LoginButtonClick(){
        document.getElementById("LoginDiv").style.display = "flex";
        document.getElementById("LoginBackgroundDivClose").style.display = "flex";
        document.getElementsByClassName("LoginFlexDivClose")[0].classList.add("LoginFlexDivClose");
}

function LoginDivDelete(){
        document.getElementById("LoginDiv").style.display = "none";
        document.getElementById("LoginBackgroundDivClose").style.display = "none";
}