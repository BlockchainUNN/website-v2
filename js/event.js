let phoneSize = window.matchMedia('(max-width:670px)')
let menubar = document.getElementById('menu')
let closeBar = document.getElementById('close')
let navList = document.getElementById('navList')
let allSections = document.querySelectorAll('section')

document.cookie = 'cookie2=value2; Samesite=None; Secure'


function menuOpen(){
    navList.style.cssText = 'transform: translateX(0%)'
    closeBar.style.cssText = 'transform: translateX(0%)'
    document.querySelector('html').style.overflow= 'hidden'
    for(i=0; i<allSections.length; i++){
        allSections[i].style.filter = 'opacity(.5) blur(3px)'
    }
    document.querySelector('footer').style.filter = 'opacity(.5) blur(3px)' 
}
function menuClose(){
    navList.style.cssText = 'transform: translateX(100%)'
    closeBar.style.cssText = 'transform: translateX(300%)'
    document.querySelector('html').style.overflow= 'scroll'
    for(i=0; i<allSections.length; i++){
        allSections[i].style.filter = 'opacity(1) blur(0px)'
    }
    document.querySelector('footer').style.filter = 'opacity(1) blur(0px)'
}

function day1(){
    document.querySelector('.day1').style.cssText = 'display:block;'
    document.querySelector('.day2').style.cssText = 'display:none;'
}
function day2(){
    document.querySelector('.day2').style.cssText = 'display:block;'
    document.querySelector('.day1').style.cssText = 'display:none;'
    document.querySelector('#btn2b').style.cssText = 'background-color: #388E3C; color: white;  border: none'

}

