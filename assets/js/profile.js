let modal = document.getElementById("myModal");

let label_date = document.getElementById("lbl_date");

let form = document.getElementById("book");

let date = document.getElementById('date');
date.min = new Date().toISOString().split("T")[0];

let option = document.getElementById("option");

let btn = document.getElementById("myBtn");

let span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

form.addEventListener('submit', (event) => {
    event.preventDefault();

    let hasError = false;

    const setErrorFor = (input, message) => {
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-field error';
        small.innerText = message;
        hasError = true;
    }

    if (date.value === '')
    {
        setErrorFor(date, "Give us a date!");
    }

    if (!hasError)
    {
        form.submit();
    }
});

let edit_date = document.getElementsByClassName("edit_date_class");
let edit_btn = document.getElementsByClassName("edit_button_class");


for(let j = 0; j < edit_date.length; j++) {

    edit_date[j].min = new Date().toISOString().split("T")[0];

    edit_date[j].value = edit_date[j].min;
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}


document.getElementById("blogs").addEventListener("click", ()=>
{
    location.href = "blog.php"
})

let appointment_div =  document.getElementById('appointment_table');
let appointment_button = document.getElementById("appointment_button");

appointment_button.addEventListener("click", ()=> {
    if (appointment_div.style.display === "table")
    {
        appointment_div.style.display = "none";
    }
    else
    {
        appointment_div.style.display = "table";
    }
})




