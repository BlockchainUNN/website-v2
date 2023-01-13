let communityHeader = document.getElementById('dive')
let tabSize = window.matchMedia('(max-width:900px)')
let phoneSize = window.matchMedia('(max-width:670px)')
let menubar = document.getElementById('menu')
let closeBar = document.getElementById('close')
let navList = document.getElementById('navList')
let reviewH = document.querySelectorAll('.reviewH')
let phoneReviewLeft = document.getElementById('reviewsSwipe2')
let phoneReviewright = document.getElementById('reviewsSwipe')
let phoneScroll;
let forward;
let preachImage = document.getElementById('preach')
let allSections = document.querySelectorAll('section')
let nlist = document.querySelectorAll('.nlist')
let ce = document.getElementById('ce')
let rectangles = document.querySelectorAll('.rectangles')
// let view = document.querySelectorAll('.more')




function bds(){
    document.getElementById('bdtext').style.cssText = 'display:none;'
    document.getElementById('bdtext_0').style.cssText = 'display:flex;'
    document.querySelector('.more').style.cssText = 'display:none;'
}
function bdsc(){
    document.getElementById('bdtext').style.cssText = 'display:block;'
    document.getElementById('bdtext_0').style.cssText = 'display:none'
    document.querySelector('.more').style.cssText = 'display:block;'
}
function fds(){
    document.getElementById('fdtext').style.cssText = 'display:none;'
    document.getElementById('fdtext_0').style.cssText = 'display:flex'
    document.querySelector('.more2').style.cssText = 'display:none;'
}
function fdsc(){
    document.getElementById('fdtext').style.cssText = 'display:block;'
    document.getElementById('fdtext_0').style.cssText = 'display:none'
    document.querySelector('.more2').style.cssText = 'display:block;'
}
function dss(){
    document.getElementById('dstext').style.cssText = 'display:none;'
    document.getElementById('dstext_0').style.cssText = 'display:flex'
    document.querySelector('.more3').style.cssText = 'display:none;'
}
function dssc(){
    document.getElementById('dstext').style.cssText = 'display:block;'
    document.getElementById('dstext_0').style.cssText = 'display:none'
    document.querySelector('.more3').style.cssText = 'display:block;'
}
function hds(){
    document.getElementById('hdtext').style.cssText = 'display:none;'
    document.getElementById('hdtext_0').style.cssText = 'display:flex'
    document.querySelector('.more4').style.cssText = 'display:none;'
}
function hdsc(){
    document.getElementById('hdtext').style.cssText = 'display:block;'
    document.getElementById('hdtext_0').style.cssText = 'display:none'
    document.querySelector('.more4').style.cssText = 'display:block;'
}
function ces(){
    document.getElementById('cetext').style.cssText = 'display:none;'
    document.getElementById('cetext_0').style.cssText = 'display:flex'
    document.querySelector('.more5').style.cssText = 'display:none;'
}
function cesc(){
    document.getElementById('cetext').style.cssText = 'display:block;'
    document.getElementById('cetext_0').style.cssText = 'display:none'
    document.querySelector('.more5').style.cssText = 'display:block;'
}


if(tabSize.matches){
    preachImage.src = './images/aboutpics.jpeg'
}



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
   


if(phoneSize.matches){
    communityHeader.textContent = 'OUR COMMUNITIES'
    for(i=0; i<nlist.length; i++){
        nlist[i].addEventListener('click', ()=>{
             menuClose();
        })
    }
    document.getElementById('logo').style.cssText = 'width: 100%; height: 500px; object-fit:cover';
    document.getElementById('skilh').textContent = 'Skillsets We Offer...'
}




function phv(){
    document.querySelector('.vision').style.cssText = 'background-color: #388E3C; color: white; box-shadow: 0px 0px 36px #388E3C; border: none; transition: .3s linear;'
    document.querySelector('.mission').style.cssText = 'background:none; color: black; box-shadow: none; border:1px solid; transition: .3s linear;'
    document.getElementById('misionhr').style.backgroundColor = '#388E3C'
}


function phm(){
    document.querySelector('.mission').style.cssText = 'background-color: #388E3C; color: white; box-shadow: 0px 0px 36px #388E3C; border: none; transition: .3s linear;'
    document.querySelector('.vision').style.cssText = 'background:none; color: black; box-shadow: none; border:1px solid; transition: .3s linear;'
    document.getElementById('visionhr').style.backgroundColor = '#388E3C'
}


document.querySelector('.vision').addEventListener('touchstart', phv)
document.querySelector('.mission').addEventListener('touchstart', phm)


let ani= document.querySelector('.oldevents')
let eventimages= document.querySelectorAll('.ani')
let cards = document.querySelectorAll('.card1')



function misso(){
    document.getElementById('misionhr').style.backgroundColor = 'white'
}
function missout(){
    document.getElementById('misionhr').style.backgroundColor = '#388E3C'
}

function _aa(){
    ani.style.cssText = 'animation-play-state: paused'
}

function _ab(){
    ani.style.cssText = 'animation-play-state: running'
}

let homeEve = document.querySelector('.oldevents')

if(!phoneSize.matches){
    homeEve.addEventListener('mouseover', _aa)
    homeEve.addEventListener('mouseout', _ab)
}

if(phoneSize.matches){
    ani.addEventListener('touchstart', _aa)
    ani.addEventListener('touchend', _ab)
}

function bb(){
    for(i=0;i<cards.length;i++){
        cards[i].style.cssText = 'animation-play-state: paused'
    }
}
function bb2(){
    for(i=0;i<cards.length;i++){
        cards[i].style.cssText = 'animation-play-state: running'
    }
}

cards[i].addEventListener('touchstart', bb)
cards[i].addEventListener('touchmove', bb2)