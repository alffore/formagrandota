
var aobjselec = document.querySelectorAll(".selec")

var avselec=['valor1///////////////////----','valor2++++++++++++++','valor3------------------']


aobjselec.forEach(e => { 

    e.addEventListener('focus',evt => {
        console.log(`foco: ${evt.target.id}`)
        console.log(evt)
        generaSelector2(evt.target)
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


function generaSelector2(obj){

    var nuevoSelector = document.createElement("select");

    let i=0
    avselec.forEach(op => { 
        nuevoSelector[i++]=new Option(op);

    })

    obj.parentElement.appendChild(nuevoSelector)
    let valor = obj.value
    console.log(valor)
    obj.remove()
}