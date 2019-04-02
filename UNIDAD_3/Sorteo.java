package sorteo;

import java.util.Scanner;

public class Sorteo {

    
    public static void main(String[] args) {
        int ciclo=0;
        do
        {
        Scanner tec = new Scanner(System.in);
        int a;
        System.out.println("¿Cuantos participantes son?");
        a=tec.nextInt();
        int valorDado = (int) Math.floor(Math.random()*a+1);
        System.out.println("El ganador es: " + valorDado);
        System.out.println("¿Quieres intentarlo nuevamente? 1.-SI 2.-NO");
            ciclo=tec.nextInt();
            }while(ciclo==1);
    }
    
}