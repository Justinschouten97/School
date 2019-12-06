package com.company.opdracht2;

public class Player extends TestProgramma{

    int xPositie;
    int yPositie;
    double snelheid;
    double richting;
    int levensTotaal;
    String usernaam;

    public Player(String usernaam, int xPositie, int yPositie, double snelheid, double richting, int levensTotaal)
    {
        this.xPositie = xPositie;
        this.yPositie = yPositie;
        this.snelheid = snelheid;
        this.richting = richting;
        this.levensTotaal = levensTotaal;
        this.usernaam = usernaam;

    }
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
}
