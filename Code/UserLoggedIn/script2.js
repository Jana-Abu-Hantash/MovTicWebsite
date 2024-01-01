const fname = document.getElementById("firstName")
const lname = document.getElementById("lastName")
const email = document.getElementById("email")
const password = document.getElementById("password")

const errorElement1 = document.getElementById('error1')
const errorElement2 = document.getElementById('error2')
const errorElement3 = document.getElementById('error3')
const errorElement4 = document.getElementById('error4')

const form = document.getElementById('form')

form.addEventListener('submit', (e) =>  {
    
    let messages = []
    if (fname.value === '' || fname.value == null) {
        messages.push('First name is required')
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement1.innerText = messages.join(', ')
    }
})

form.addEventListener('submit', (e) =>  {
    
    let messages = []
    if (lname.value === '' || lname.value == null) {
        messages.push('Last name is required')
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement2.innerText = messages.join(', ')
    }
})

form.addEventListener('submit', (e) =>  {
    
    let messages = []

    if (email.value === '' || email.value == null) {
        messages.push('Email is required')
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement3.innerText = messages.join(', ')
    }
})

form.addEventListener('submit', (e) =>  {
    
    let messages = []

    if (password.value === '' || password.value == null) {
        messages.push('Password is required')
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement4.innerText = messages.join(', ')
    }
})