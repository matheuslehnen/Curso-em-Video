package aula06;

public class ControleRemoto implements Controlador {

    private int volume;
    private boolean ligado;
    private boolean tocando;


    //--------------------------------------------- MÉTODOS CONSTRUTOR -------------------------------------------//


    public ControleRemoto() {
        this.volume = 50;
        this.ligado = false;
        this.tocando = false;
    }


    //------------------------------------------------- MÉTODOS  ------------------------------------------------//

    public void ligar() {
        this.setLigado(true);
    }

    
    public void desligar() {
        this.setLigado(false);
    }

    
    public void abrirMenu() {
        System.out.println();
        System.out.println("Esta ligado? " + this.isLigado());
        System.out.println("Esta tocando? " + this.isTocando());
        System.out.println("Volume: " + this.getVolume());
        for(int i = 0; i < this.getVolume(); i += 10){
            System.out.print("[]");
        }
        System.out.println();
    }

    
    public void fecharMenu() {
        System.out.println("Fechando menu.");
    }

    
    public void maisVolume() {
        if(this.isLigado()) {
            this.setVolume(this.getVolume() + 10);
        } else {
            System.out.println("Nao foi possivel aumentar o volume. O aparelho esta desligado.");

        }
    }

   
    public void menosVolume() {
        if(this.isLigado()) {
            this.setVolume(this.getVolume() - 10);
        } else {
            System.out.println("Nao foi possivel diminuir o volume. O aparelho esta desligado.");
        }
    }

    
    public void ligarMudo() {
        if(this.isLigado() && this.getVolume() > 0) {
            this.setVolume(0);
        }
    }


    public void desligarMudo() {
        if(this.isLigado() && this.getVolume() == 0) {
            this.setVolume(50);
        }
    }


    public void play() {
        if(this.isLigado() && !this.isTocando()){
                this.setTocando(true);
        } else {
            System.out.println("O aparelho esta desligado.");
        }
    }

    public void pause() {
        if(this.isLigado() && this.isTocando()){
            this.setTocando(false);
        }else {
            System.out.println("O aparelho esta desligado.");
        }
    }


    //------------------------------------------ MÉTODOS GETTERS AND SETTERS -----------------------------------//


    public int getVolume() {
        return volume;
    }

    public void setVolume(int volume) {
        this.volume = volume;
    }

    public boolean isLigado() {
        return ligado;
    }

    public void setLigado(boolean ligado) {
        this.ligado = ligado;
    }

    public boolean isTocando() {
        return tocando;
    }

    public void setTocando(boolean tocando) {
        this.tocando = tocando;
    }
}
