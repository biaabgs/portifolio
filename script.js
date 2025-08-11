//header interativo
window.addEventListener('scroll', function(){
    var header = document.querySelector('.header')
    header.classList.toggle('rolagem', window.scrollY > 0)
})

//scroll parte específica
function scrollWin() {
    window.scrollTo({
        top: 0,  
        left: 0,   
        behavior: 'smooth' 
    });
}
