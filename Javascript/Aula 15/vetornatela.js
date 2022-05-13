let valores = [5, 8, 4, 9, 7, 3] / console.log(valores)

/*for (let pos = 0; pos <= valores.length; pos++) {
  console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}*/
let pos = valores.indexOf(3)
for (let pos in valores) {
  console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}
