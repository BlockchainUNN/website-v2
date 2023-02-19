let header = document.querySelector('h1')
let phoneSize = window.matchMedia('(max-width:760px)')
let menubar = document.getElementById('menu')
let closeBar = document.getElementById('close')
let navList = document.getElementById('navList')

document.cookie = 'cookie2=value2; Samesite=None; Secure'

if(phoneSize.matches){
    header.textContent = 'OUR TEAM'
    header.style.fontSize = '25px'
    document.getElementById('fuwu').textContent = 'The Brains Behind the movement...'
}

function menuOpen(){
    navList.style.cssText = 'transform: translateX(0%)'
    closeBar.style.cssText = 'transform: translateX(0%)'
}
function menuClose(){
    navList.style.cssText = 'transform: translateX(100%)'
    closeBar.style.cssText = 'transform: translateX(300%)'
}