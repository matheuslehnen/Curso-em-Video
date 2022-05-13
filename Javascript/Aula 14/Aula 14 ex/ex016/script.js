function contar() {
  let inicio = window.document.getElementById('txtinicio')
  let fim = window.document.getElementById('txtfim')
  let passo = window.document.getElementById('txtpasso')
  let res = window.document.getElementById('res')
  let c

  if (
    inicio.value.length == 0 ||
    fim.value.length == 0 ||
    passo.value.length == 0
  ) {
    res.innerHTML = `Impossível de contar!`
  } else {
    res.innerHTML = `Contando... <br>`
    let i = Number(inicio.value)
    let f = Number(fim.value)
    let p = Number(passo.value)
    if (p <= 0) {
      window.alert(`Passo Inválido! Considerando PASSO 1`)
      p = 1
    }
    if (i < f) {
      //Contagem Crescente
      for (c = i; c <= f; c += p) {
        res.innerHTML += `${c} \u{1F449}`
      }
      res.innerHTML += `\u{1F60E}`
    } else {
      //Contagem Regressiva
      for (c = i; c >= f; c -= p) {
        res.innerHTML += `${c} \u{1F449}`
      }
      res.innerHTML += `\u{1F60E}`
    }
  }
}
