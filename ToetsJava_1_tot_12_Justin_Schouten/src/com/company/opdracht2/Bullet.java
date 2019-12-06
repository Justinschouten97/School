package com.company.opdracht2;

public class Bullet extends TestProgramma{

    int xPositie;
    int yPositie;
    double snelheid;
    double richting;


    public Bullet(int xPositie, int yPositie, double snelheid, double richting)
    {
        this.xPositie = xPositie;
        this.yPositie = yPositie;
        this.snelheid = snelheid;
        this.richting = richting;

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
