let text = document.getElementById('text');

/**Membuat effect parallax scrolling pada judul website */
window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * 2.5 + 'px';
    text.style.marginBottom = value * 0.5 + 'px';

});