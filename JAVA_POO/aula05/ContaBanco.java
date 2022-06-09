package aula05;

public class ContaBanco {

    public int numConta;
    protected String tipo;
    private String titular;
    private boolean aberta;
    private float valorConta;
    private float valorMaos;
    public static int counter = 1;


    //--------------------------------------------- MÉTODOS CONSTRUTOR -------------------------------------------//

    public ContaBanco(String titular) {
        this.numConta = counter;
        this.titular = titular;
        this.valorConta = 0;
        this.aberta = false;
        counter++;
    }


    //-------------------------------------------------- MÉTODOS -------------------------------------------------//

    public void status() {
        System.out.println("------------------------------------------");
        System.out.println("Nr: " + this.numConta);
        System.out.println("Tipo: " + this.tipo);
        System.out.println("Titular: " + this.titular);
        System.out.println("Aberta: " + this.aberta);
        System.out.println("Em conta: " + this.valorConta);
        System.out.println("Em maos: " + this.valorMaos);
        System.out.println("------------------------------------------");
        System.out.println();
        System.out.println();
        System.out.println();
    }

    public void abrirConta(String tipo) {
        if (this.isAberta()) {
            System.out.println("Ja existe uma conta aberta para esta pessoa");
        } else {
            this.setAberta(true);
            this.setTipo(tipo);
            if (tipo == "Conta-Corrente") {
                this.setValorConta(50f);
                System.out.println("Conta aberta com sucesso!");
            } else if (tipo == "Conta-Poupanca") {
                this.setValorConta(150f);
                System.out.println("Conta aberta com sucesso!");

            }
        }
    }

    public void fecharConta() {
        if (this.getValorConta() > 0) {
            System.out.println("Conta nao pode ser encerrada. Ainda ha saldo.");
        } else if (this.getValorConta() < 0) {
            System.out.println("Conta nao pode ser encerrada. Voce precisa cobrir o debito antes de encerrar.");

        } else {
            this.setAberta(false);
            System.out.println("Conta em nome de " + this.getTitular() + " encerrada!");
        }
    }

    public void depositar(float valor) {
        if (this.isAberta()) {
            this.setValorConta(this.getValorConta() + valor);
            this.setValorMaos(this.getValorMaos() - valor);
            System.out.println("Deposito realizado na conta de " + this.getTitular());
        } else {
            System.out.println("Nao e possivel depositar pois a conta esta encerrada.");
        }
    }

    public void sacar(float valor) {
        if (this.isAberta()) {
            if (this.getValorConta() >= valor) {
                this.setValorConta(this.getValorConta() - valor);
                this.setValorMaos(this.getValorMaos() + valor);
                System.out.println("Saque realizado na conta de " + this.getTitular());
            } else {
                System.out.println("Saldo insuficiente");
            }
        } else {
            System.out.println("Nao e possivel sacar pois a conta esta encerrada.");

        }
    }

    public void pagarMensal() {
        if (this.isAberta()) {
            if (this.getTipo() == "Conta-Corrente") {
                float valor = 12;
                if (this.getValorConta() >= valor) {
                    this.setValorConta(this.getValorConta() - valor);
                } else {
                    System.out.println("O cliente nao tem saldo suficiente para realizar a cobranca");
                }
            } else if (this.getTipo() == "Conta-Poupanca") {
                float valor = 20;
                if (this.getValorConta() >= valor) {
                    this.setValorConta(this.getValorConta() - valor);
                    System.out.println("Caiu aqui");
                } else {
                    System.out.println("O cliente nao tem saldo suficiente para realizar a cobranca");
                }
            }
        } else {
            System.out.println("Nao e possivel cobrar mensalidade de uma conta encerrada.");
        }
    }

    //------------------------------------------ MÉTODOS GETTERS AND SETTERS -----------------------------------//


    public int getNumConta() {
        return numConta;
    }

    public void setNumConta(int numConta) {
        this.numConta = numConta;
    }

    public String getTitular() {
        return titular;
    }

    public void setTitular(String titular) {
        this.titular = titular;
    }

    public float getValorConta() {
        return valorConta;
    }

    public void setValorConta(float valorConta) {
        this.valorConta = valorConta;
    }

    public float getValorMaos() {
        return valorMaos;
    }

    public void setValorMaos(float valorMaos) {
        this.valorMaos = valorMaos;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public boolean isAberta() {
        return aberta;
    }

    public void setAberta(boolean aberta) {
        this.aberta = aberta;
    }


}