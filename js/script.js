"use strict";


// carousel des promos

// $('.main-7').owlCarousel({
//   items: 2,
//   dots: false,
//   autoplay: true,
//   nav: false,
//   margin: 30,
// })

$('.owl-carousel').owlCarousel({
  margin: 30,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})


// burger-menu
let burgerMenu = document.getElementById('burger-menu');

burgerMenu.addEventListener('click', function () {
  let menu = document.getElementsByClassName("main-1")[0];
  let perso = document.getElementsByClassName("nav-perso")[0];
  let perso2 = document.getElementsByClassName("nav-perso")[1];
  this.classList.toggle("close");
  menu.classList.toggle("overlay");
  perso.classList.toggle("overlay");
  perso2.classList.toggle("overlay");
});



// connexion et enregistrement

let action1 = document.getElementsByClassName("action")[1] //login
let action2 = document.getElementsByClassName("action")[0] //register
let login = document.getElementsByClassName("login-form")[0];
let register = document.getElementsByClassName("register-form")[0];

action1.addEventListener("click", () => {

  login.classList.add("togle");
  register.classList.remove("togle")
})

action2.addEventListener("click", () => {
  register.classList.add("togle");
  login.classList.remove("togle")
})


// $('.message a').click(function () {
//   $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
// });



// gestion du panier
let panier = [];
let total = 0;

function ajouterArticle(prix) {
  total += prix;
  panier.push(prix);

  document.getElementById('texte-panier').innerHTML = 'Vous avez ' + panier.length + ' articles pour un total de ' + total.toString() + '€';
  rafraichirPanier();
}

function rafraichirPanier() {
  let nbreArticle1 = 0;
  let nbreArticle2 = 0;
  let nbreArticle3 = 0;
}