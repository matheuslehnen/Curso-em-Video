function verificar() {
  var data = new Date()
  var ano = data.getFullYear()
  var fano = window.document.getElementById('txtano')
  var res = document.getElementById('res')
  if (fano.value == 0 || Number(fano.value) > ano) {
    window.alert('[ERRO] Verifique os dados e tente novamente!')
  } else {
    var fsex = window.document.getElementsByName('radsex')
    var idade = ano - Number(fano.value)
    var gênero = ''
    var img = document.createElement('img')
    img.setAttribute('id', 'foto')

    if (fsex[0].checked) {
      gênero = 'Homem'
      if (idade <= 12) {
        // Criança
        img.setAttribute('src', 'mcrianca.jpg')
        //img.src = 'mcrianca.jpg'
      } else if (idade > 12 && idade < 18) {
        // Adolescente
        img.setAttribute('src', 'mjovem.jpg')
        // img.src = 'fotomadolescente.jpg'
      } else if (idade >= 18 && idade <= 60) {
        // Adulto
        img.setAttribute('src', 'madulto.jpg')
        //img.src = ''
      } else if (idade > 60) {
        // Idoso
        img.setAttribute('src', 'midoso.jpg')
      }
    } else if (fsex[1].checked) {
      gênero = 'Mulher'
      if (idade <= 12) {
        // Criança
        img.setAttribute('src', 'fcrianca.jpg')
      } else if (idade > 12 && idade < 18) {
        // Adolescente
        img.setAttribute('src', 'fjovem.jpg')
      } else if (idade >= 18 && idade <= 60) {
        // Adulto
        img.setAttribute('src', 'fadulto.jpg')
      } else if (idade > 60) {
        // Idoso
        img.setAttribute('src', 'fidosa.jpg')
      }
    }

    res.style.textAlign = 'center'

    res.innerHTML = `Detectamos ${gênero} com ${idade} anos.`
    res.appendChild(img)
  }
}
