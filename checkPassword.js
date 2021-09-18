let password2 = document.getElementsByName("club_pass_word");
function checkPassword(password, password2){
    if(!password !== password2){
        alert("Passwords must be same");
        document.getElementsByName("club_pass_word_repeat").innerHTML = "";
        window.history(0);
    }
}