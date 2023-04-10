/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

function validateSize(input) {
  const fileSize = input.files[0].size / 1024; // in KB
  if (fileSize < 1 || fileSize > 3072) {
    alert('El tamaño del archivo debe estar entre 1 KB y 3 MB');
    // $(file).val(''); //for clearing with Jquery
  } else {
    // Proceed further
  }
}

  function countChars() {
  var textarea = document.getElementById("sit_Descripcion");
  var charCount = document.getElementById("charCount");
  var maxLength = textarea.getAttribute("maxlength");
  var currentLength = textarea.value.length;
  
  charCount.innerHTML = currentLength + "/" + maxLength + " caracteres";
  
  if (currentLength > maxLength) {
    textarea.classList.add("is-invalid");
  } else {
    textarea.classList.remove("is-invalid");
  }
}

function countChars() {
  var textarea = document.getElementById("pro_Descripcion");
  var charCount = document.getElementById("charCount");
  var maxLength = textarea.getAttribute("maxlength");
  var currentLength = textarea.value.length;
  
  charCount.innerHTML = currentLength + "/" + maxLength + " caracteres";
  
  if (currentLength > maxLength) {
    textarea.classList.add("is-invalid");
  } else {
    textarea.classList.remove("is-invalid");
  }
}
