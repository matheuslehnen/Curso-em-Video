package aula07;

public class Aula07 {

    public static void main(String[] args) {

        Lutador l[] = new Lutador [6];

        l[0] = new Lutador("Pretty Boy", "frances", 31, 1.75f,68.9f,11,1,2);
        l[1] = new Lutador("Putscript", "brasileiro", 29, 1.68f,57.8f,14,3,2);
        l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65f,80.9f,12,1,2);
        l[3] = new Lutador("Dead Code", "australiano", 28, 1.93f,81.6f,13,2,0);
        l[4] = new Lutador("UFOCobol", "brasileiro", 37, 1.70f,119.3f,5,3,4);
        l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81f,105.7f,12,4,2);

        l[0].apresentar();
        l[1].apresentar();
        l[2].apresentar();
        l[3].apresentar();
        l[4].apresentar();
        l[5].apresentar();
    }
}