//header interativo
window.addEventListener('scroll', function(){
    var header = document.querySelector('.header')
    header.classList.toggle('rolagem', window.scrollY > 0)
})

//scroll parte específica
function scrollWin() {
    window.scrollTo({
        top: 0,  // ajuste da posição vertical
        left: 0,    // posição horizontal
        behavior: 'smooth'  // Scroll suave
    });
}

function scrollWin2() {
    window.scrollTo({
        top: 725,
        left: 0,
        behavior: 'smooth'
    });
}

function scrollWin3() {
    window.scrollTo({
        top: 200,
        left: 0,
        behavior: 'smooth'
    });
}

function scrollWin4() {
    window.scrollTo({
        top: 4250,
        left: 0,
        behavior: 'smooth'
    });
}
