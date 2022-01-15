// aos animation
AOS.init();

let header = document.querySelector('.header');
let carousel = document.querySelector('.carousel');
let breadCrumb = document.querySelector('.breadcrumb-area');

window.onscroll = () => {
    let scrollTop = document.documentElement.scrollTop;

    if (scrollTop > header.offsetHeight) {
        header.classList.add('active');

        if (carousel !== null) {
            carousel.style.marginTop = header.offsetHeight + 'px';
        } else if (breadCrumb !== null){
            breadCrumb.style.marginTop = header.offsetHeight + 'px';
        }
    } else {
        header.classList.remove('active');

        if (carousel !== null) {
            carousel.style.marginTop = 0 + 'px';
        } else if (breadCrumb !== null){
            breadCrumb.style.marginTop = 0 + 'px';
        }
    }
}

// selecting filter menu and filter items
let filterMenu = document.querySelectorAll('.filter-menu li');
let filterContents = document.querySelectorAll('.filter-content');

for(let i = 0; i < filterContents.length; i ++){
    if(filterContents[i].getAttribute('data-item') === 'construction'){
        filterContents[i].classList.add('deleteContents');
    }
}

for (let i = 0; i < filterMenu.length; i++) {
    filterMenu[i].addEventListener('click', () => {
        for (let j = 0; j < filterMenu.length; j++) {
            filterMenu[j].classList.remove('active-menu');
        }

        filterMenu[i].classList.add('active-menu');
        let attrValue = filterMenu[i].getAttribute('data-list');

        for (let k = 0; k < filterContents.length; k++) {
            // delete all active contents 
            filterContents[k].classList.add('deleteContents');
            filterContents[k].classList.remove('activeContents');

            // filter contents: display filter contents or display all contents (if attr is 'all')
            if (filterContents[k].getAttribute('data-item') === attrValue) {
                filterContents[k].classList.add('activeContents');
                filterContents[k].classList.remove('deleteContents');
            }
        }
    });
}

// selecting lightbox elements
let lightBox = document.querySelector('.lightbox');
let closeBtn = document.querySelector('.lightbox-close-btn');
let imgCategory = document.querySelector('#image-category');
let lightBoxImage = document.querySelector('.image-wrapper img');
let lightBoxShadow = document.querySelector('.lightbox-shadow');
let controlScrolling = document.querySelector('body');

for (let i = 0; i < filterContents.length; i++) {
    filterContents[i].addEventListener('click', () => {
        let getCategory = filterContents[i].getAttribute('data-item');
        let getImg = filterContents[i].querySelector('img').src;

        imgCategory.textContent = getCategory;
        lightBoxImage.src = getImg;

        lightBox.classList.add('show-lightbox');
        lightBoxShadow.classList.add('show-shadow');
        controlScrolling.style.overflow = 'hidden';

        closeBtn.onclick = () => {
            lightBox.classList.remove('show-lightbox');
            lightBoxShadow.classList.remove('show-shadow');
            controlScrolling.style.overflow = 'auto';
        }
    });
}


// Service gallery

let galleryContent = document.querySelectorAll('.service-gallery-content');

for(let i = 0; i < galleryContent.length; i ++){
    galleryContent[i].onclick = () => {
        window.location = "project.html";
    }
}