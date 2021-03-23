package com.company.opdracht2;

public class Enemy extends TestProgramma{

    int xPositie;
    int yPositie;
    double snelheid;
    double richting;
    boolean isLevend;

    public Enemy(int xPositie, int yPositie, double snelheid, double richting, boolean isLevend)
    {
        this.xPositie = xPositie;
        this.yPositie = yPositie;
        this.snelheid = snelheid;
        this.richting = richting;
        this.isLevend = isLevend;

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
}
