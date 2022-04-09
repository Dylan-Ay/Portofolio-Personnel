
// Quand on clique sur un link de la nav-bar, la navbar se cache sur mobile uniquement
$(document).ready(function(){
    $('.nav-link').on('click',function() {
        $('.navbar-collapse').collapse('hide');
    });


//Ajout de la classe active quand on clique
    $('.nav-link').click(function(){
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
});

// Quand l'utilisateur scroll vers le bas de 4900px, le bouton s'affiche
window.onscroll = function () {
scrollFunction();
};

function scrollFunction() {
    if ( document.body.scrollTop > 4900 || document.documentElement.scrollTop > 4900 ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// Bouton haut de page
let mybutton = document.getElementById("btn-back-to-top");

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
mybutton.addEventListener("click", backToTop);


// Animations d'apparation des éléments de la page
const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};

const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } //else if (elementOutofView(el)) {
      //hideScrollElement(el)
    //}
  })
}

window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});

// Button show-more
let btnShowMore = document.getElementById('show-more-btn');
let moreContent = document.querySelectorAll('.show-more');
let isDisplayed = false;

moreContent.forEach(element => {
  element.style.display = "none";
});

function displayContent(){
  if (isDisplayed === false){
    moreContent.forEach(element => {
      element.style.display = "flex";
      btnShowMore.innerHTML = "Afficher Moins";
    });
    isDisplayed = true;
  }else if (isDisplayed === true){
    moreContent.forEach(element => {
      element.style.display = "none";
      btnShowMore.innerHTML = "Afficher Plus";
    });
    isDisplayed = false;
  }
}

btnShowMore.addEventListener('click', displayContent);