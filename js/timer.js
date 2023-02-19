const day = document.getElementById('days')
const hours = document.getElementById('hours')
const minutes = document.getElementById('minutes')
const second = document.getElementById('seconds')



const currentDate = new Date().getFullYear()
const customDate = new Date(`April 28 ${currentDate} 00:00:00`)


function countdown (){
    const currentTime = new Date();
    const diff = customDate - currentTime;
    d = Math.floor(diff/1000/60/60/24);
    h = Math.floor(diff/1000/60/60)% 24 ;
    m = Math.floor(diff/1000/60)% 60;
    s = Math.floor(diff/1000)% 60;

    console.log(d)
    if(d < 10 ){
        day.textContent = `0${d}`
    }
    else{
        day.textContent = d
    }

    if(h < 10 ){
        hours.textContent = `0${h}`
    }
    else{
        hours.textContent = h
    }
    
    if(m < 10 ){
        minutes.textContent = `0${m}`
    }
    else{
        minutes.textContent = m
    }

    if(s < 10 ){
        second.textContent = `0${s}`
    }
    else{
        second.textContent = s
    }
}


setInterval(countdown, 1000)




