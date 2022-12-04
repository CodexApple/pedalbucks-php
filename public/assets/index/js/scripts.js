/*!
* Start Bootstrap - Creative v7.0.6 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
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

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

});

// const jsonQuery = JSON.stringify({ 
//     uuid: "7c8f-2341-e13e-4009", 
//     firstname: "Kristofer Martin", 
//     lastname: "Pillarina", 
//     cellphone: "09281642285",
//     address: "Somewhere here",
//     birthday: "11/14/2000",
//     type: 1,
//     distance: 1000,
//     height: 1000,
//     weight: 1000,
//     calories: 1000,
// });

// (async () => {
//     const rawResponse = await fetch('http://localhost/account/api/profile', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: jsonQuery
//     });

//     const content = await rawResponse.json();
//     console.log(content);

// })();

const jsonQuery = JSON.stringify({ 
    uuid: "bda0-ef3b-dfa5-4bca",
    submit: "claimBtn", 
});

(async () => {
    const rawResponse = await fetch('http://localhost:8080/account/api/task', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: jsonQuery
    });

    const content = await rawResponse.text();
    console.log(content);

})();