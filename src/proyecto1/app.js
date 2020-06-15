
var aobjselec = document.querySelectorAll(".selec")

var avselec=['valor1','valor2','valor3']


aobjselec.forEach(e => { 

    e.addEventListener('focus',evt => {
        console.log(`foco: ${evt.target.id}`)
    })

    e.addEventListener('blur',evt =>{

    })
})



function generaSelector(valor){
    let buffer='<select name="" id="">'

    avselec.forEach(v =>{
        buffer+='<option value="">'
    })    
}