package com.company.opdracht2;

public class GameObject {

    int xPositie;
    int yPositie;
    double snelheid;
    double richting;
    int levensTotaal;
    String usernaam;
    boolean isLevend;

    public void printPlayer()
    {
        System.out.println("- Player -");
        System.out.println("Usernaam: " + usernaam);
        System.out.println("X: " + xPositie);
        System.out.println("Y: " + yPositie);
        System.out.println("Snelheid: " + snelheid);
        System.out.println("Richting: " + richting);
        System.out.println("Aantal Levens: " + levensTotaal);

    }

    public void printEnemy()
    {
        System.out.println("- Enemy -");
        System.out.println("X: " + xPositie);
        System.out.println("Y: " + yPositie);
        System.out.println("Snelheid: " + snelheid);
        System.out.println("Richting: " + richting);
        System.out.println("isLevend: " + isLevend);

    }

    public void printBullet()
    {
        System.out.println("- Bullet -");
        System.out.println("X: " + xPositie);
        System.out.println("Y: " + yPositie);
        System.out.println("Snelheid: " + snelheid);
        System.out.println("Richting: " + richting);

    }

}
