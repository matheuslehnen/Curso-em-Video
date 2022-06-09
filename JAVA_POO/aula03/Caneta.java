package aula03;

public class Caneta {
    public String modelo;
    public String cor;
    private float ponta;
    protected int carga;
    private boolean tampada;


    public void status() {
        System.out.println("Uma caneta " + this.cor);
        System.out.println("Esta tampada? " + this.tampada);
        System.out.println("Modelo: " + this.modelo);
        System.out.println("Ponta: " + this.ponta);
        System.out.println("Carga: " + this.carga);
    }

    public void escrever(){

    }

    public void rabiscar() {
        if (tampada) {
            System.out.println("Erro");
        } else {
            System.out.println("Estou rabiscando!");
        }
    }

    public void pintar(){

    }


    public void tampar() {
        this.tampada = true;
    }

    public void destampar() {
        this.tampada = false;
    }


}