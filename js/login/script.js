var container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

function signUp() {
    let Username = document.getElementById('username-up').value;
    let Email = document.getElementById('email-up').value;
    let Password = document.getElementById('password-up').value;
    let PasswordRepeat = document.getElementById('password-repeat-up').value;
    let Type = document.getElementById('type-up').value;
	$.ajax({
        type: "POST",
        url: "signup.php",
        data: {
            username: Username,
            email: Email,
            password: Password,
            passwordRepeat: PasswordRepeat,
            type: Type
        },
        success: function(data) {
            if (Type == "user") {
                $('#alert-box-signup').html(data);
            } else {
                window.location.href = "./admin-signup.html";
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    })
}

function signIn() {
    let Email = document.getElementById('email-in').value;
    let Password = document.getElementById('password-in').value;
	$.ajax({
        type: "POST",
        url: "signin.php",
        data: {
            email: Email,
            password: Password
        },
        success: function(data) {
            $('#alert-box-signin').html(data);
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    })
}