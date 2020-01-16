//data
var errors = [];
//functions
function login() {
    var username = document.getElementById("log-username").value;
    var password = document.getElementById("log-pass").value;
    if (validateLogin(username, password)){
        errors.length = 0;
        var form = new FormData();
        form.append('action', 'login');
        form.append('username', username);
        form.append('pass', password);
        axios.post('php-scripts/sessionMgmt.php', form)
            .then(response =>{
                if (response.data == 'not logged') {
                    errors.push("Incrrect Password or Username");
                    displayErrors();
                } else {
                    displayErrors();
                    window.location.replace("./profile.php");
                }
            })
            .catch(error => {
                console.log(error);
            })
    } else {
        displayErrors();
    }
}
function logout(){
    var form = new FormData();
    form.append('action', 'logout');
    axios.post("php-scripts/sessionMgmt.php", form)
    .then(response => {
        console.log(response.data);
        window.location.replace("index.php");
    })
}
function validateLogin(user, pass){
    user == "" ? errors.push("Must fill username") : null
    pass == "" ? errors.push("Must fill password") : null
    return errors.length > 0 ?  false : true
}
function displayErrors(){
    div = document.getElementById('errors');
    div.innerHTML = ``;
    errors.forEach(element =>{
        div.innerHTML += `<div class="alert alert-danger" role="alert">${element}</div>`
    })
    errors.length = 0;
}
function passMatch(pass1, pass2){
    if (pass1 == pass2) {
        return true;
    } else {
        errors.push("Passwords must match")
        return false;
    }
}
function register(){
    var username = document.getElementById("re-username").value;
    var password = document.getElementById("re-password").value;
    var password2 = document.getElementById("re-password2").value;
    if (validateLogin(username, password)) {
        if (passMatch(password, password2)) {
            form = new FormData();
            form.append('action', 'register');
            form.append('username', username);
            form.append('pass', password);
            axios
                .post("php-scripts/sessionMgmt.php", form)
                .then(response => {
                    console.log(response.data);
                    if (response.data == "registered") {
                        errors.length = 0;
                        div = document.getElementById('errors');
                        div.innerHTML = `<div class="alert alert-success" role="alert">User succesfully registered. Now you can log in</div>`;
                    } else if (response.data == "exists"){
                        errors.push("User exists. Please, use other username");
                        displayErrors();
                    }
                })
                .catch(error => {
                    console.log(error);
                })
        } else {
            displayErrors();
        }
    } else {
        displayErrors();
    }
}
//mounted