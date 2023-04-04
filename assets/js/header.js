console.log("Hello test");

const header = document.querySelector('.header');

window.onscroll = function (){
    var top = window.scrollY;
    var windowHeight = window.innerHeight;
    console.log(windowHeight);
    console.log(top);
    if (top >= windowHeight) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
}

const checkbox = document.getElementById('check');

function iconChange() {
    var cross = document.querySelector('.header i');
    var top = window.scrollY;
    var windowHeight = window.innerHeight;

    //Change the icon 'bars' <=> 'times'
    if (checkbox.checked){
        console.log('is checked');
        cross.classList.remove('fa-bars');
        cross.classList.add('fa-times');
    } else {
        console.log('nope');
        cross.classList.remove('fa-times');
        cross.classList.add('fa-bars');
    }

    //Change the background-color when checked or not
    if (
        (checkbox.checked && top < windowHeight) ||
        (checkbox.checked && top >= windowHeight) ||
        (!checkbox.checked && top >= windowHeight)
    ) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
}