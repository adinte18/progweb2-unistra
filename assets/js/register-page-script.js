const form = document.getElementById('register-form');
const username = document.getElementById('username');
const password = document.getElementById('password');
const email = document.getElementById('email');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const regex = /[!@#$%^&*(),.?":{}|<>/']/g

    let hasError = false;

    const setErrorFor = (input, message) => {
        hasError = true;
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-field error';
        small.innerText = message;
    }

    if(username.value.match(regex))
    {
        setErrorFor(username, "Your username can not contain special characters");
    }

    if (username.value === '')
    {
        setErrorFor(username, "Give us a username :) ");
    }

    if (password.value === '' || password.value.length < 6)
    {
        setErrorFor(password, "Password should be atleast 6 characters long.");
    }

    if (!isEmail(email.value))
    {
        setErrorFor(email, "Not valid mail");
    }

    if (email.value === '')
    {
        setErrorFor(email, "Give us a mail :) ");
    }


    if (!hasError)
    {
        form.submit();
    }
});



function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}