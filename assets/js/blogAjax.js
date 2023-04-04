const blogId = document.getElementById('blog_div');

window.onload = function test()
{
    fetch("/assets/php/blog-handler.php")
    .then((response) =>{
        response.json()
            .then((data)=>{
                data.forEach(id => {

                    const div = document.createElement('div');
                    div.className = "article_content"

                    const nom = document.createElement('p');
                    nom.innerText = "Publié par : " + id.nom;

                    const title = document.createElement('h3');
                    title.innerText = id.title;

                    const content = document.createElement('p');
                    content.innerText = id.content;
                    content.className = "blog_text";

                    const categorie = document.createElement('p');
                    categorie.innerText = 'Categorie : ' + id.categories;

                    div.appendChild(title);
                    div.appendChild(content);
                    div.appendChild(nom);
                    div.appendChild(categorie);

                    blogId.appendChild(div);
                })
            })
    })
    .catch()
}

let form = document.getElementById("post");

let modal = document.getElementById("myModal2");

let btn = document.getElementById("myBtn2");

let span = document.getElementsByClassName("close2")[0];

let closebtn = document.getElementById('closebtn');
let closebtn2 = document.getElementById("closebtn2");
let error = document.getElementById('error');
let success = document.getElementById('success');

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

if (closebtn != null)
{
    closebtn.onclick = function () {
        success.style.display = "none";
    }
}

if (closebtn2 != null){
    closebtn2.onclick = function() {
        error.style.display="none";
    }
}