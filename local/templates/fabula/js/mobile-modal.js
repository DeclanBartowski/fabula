// Ширина скролла
const html = document.querySelector('html');
let documentWidth = parseInt(document.documentElement.clientWidth);
let windowsWidth = parseInt(window.innerWidth);
let scrollbarWidth = windowsWidth - documentWidth;

// Переменные для мобильного меню
const mobileModal = document.querySelector('.mobile-modal');
const modalHead = document.querySelector('.mobile-modal-head');
const modalNav = document.querySelector('.mobile-modal-nav');
const modalFooter = document.querySelector('.mobile-modal-footer');
const burger = document.querySelector('#burger');
const exit = document.querySelector('#exit');

burger.addEventListener('click', () => {
    html.style.overflow = "hidden";
	html.style.marginRight = scrollbarWidth + "px";
    mobileModal.classList.add('mobile-modal-visible');
    modalHead.classList.add('mobile-modal-head-visible');
    modalNav.classList.add('mobile-modal-nav-visible');
    modalFooter.classList.add('mobile-modal-footer-visible');
});

exit.addEventListener('click', () => {
    html.style.overflow = "visible";
	html.style.marginRight = "0";
    mobileModal.classList.remove('mobile-modal-visible');
    modalHead.classList.remove('mobile-modal-head-visible');
    modalNav.classList.remove('mobile-modal-nav-visible');
    modalFooter.classList.remove('mobile-modal-footer-visible');
});