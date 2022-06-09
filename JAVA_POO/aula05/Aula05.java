package aula05;

public class Aula05 {

    public static void main(String[] args) {

        ContaBanco p1 = new ContaBanco("Jubileu");

        p1.abrirConta("Conta-Corrente");
        p1.depositar(300);

        p1.status();



        ContaBanco p2 = new ContaBanco("Creuza");
        p2.abrirConta("Conta-Poupanca");
        p2.depositar(500);
        p2.sacar(100);
        p2.sacar(550);
        p2.pagarMensal();


        p2.status();


    }
}