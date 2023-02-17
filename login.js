let email = document.getElementById('email')
let password = document.getElementById('pw')
let log_in = document.querySelector('button')
const corect_email = 'admin@blockchainUNN.org'
const correct_pw = '0x8F0D98d4668fcC0A29Fa28cBF866A2C8e5b0E941'

log_in.addEventListener('click', ()=>{
    if(email.value === corect_email && password.value === correct_pw){
        confirm('Confirm log in')
        alert('correct')
    }else{
        alert('Please input a valid username or password')
    }
    console.log(email.value)
})

