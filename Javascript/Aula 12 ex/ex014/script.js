function carregar() {
  var msg = window.document.getElementById('msg')
  var img = window.document.getElementById('imagem')
  var data = new Date()
  var hora = data.getHours()

  msg.innerHTML = `Agora são ${hora} horas`
  if (hora >= 6 && hora < 12) {
    //BOM DIA!
    img.src = '1amanhecernatureza.jpg'
    document.body.style.background = '#eddf87'
  } else if (hora >= 12 && hora <= 18) {
    //BOA TARDE!
    img.src = '2tardecliffs.jpg'
    document.body.style.background = '#c77f06'
  } else {
    //BOA NOITE!
    img.src = '3noitealsacia.jpg'
    document.body.style.background = '#021b3a'
  }
}
