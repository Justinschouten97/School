package com.company.opdracht2;

public class TestProgramma extends GameObject {


    public static void main(String[] args) {
        // Players
        Player player1 = new Player("xXJQ-MasterXx", 17, 23, 3.4, 151.2, 5);

        // Enemies
        Enemy enemy1 = new Enemy(50, 62, 5.2, 45.7, true);
        Enemy enemy2 = new Enemy(103, 201, 0.0, 0.0, false);

        // Bullets
        Bullet bullet1 = new Bullet(33, 75, 20.0, 90.0);
        Bullet bullet2 = new Bullet(39, 39, 20.0, 40.0);
        Bullet bullet3 = new Bullet(78, 34, 20.0, 100.0);
        Bullet bullet4 = new Bullet(89, 310, 20.0, 10.0);

        for (int Alles = 0; Alles < 7; Alles++) {
            GameObject go = new GameObject();
            System.out.println(player1.usernaam + player1.xPositie + player1.yPositie + player1.snelheid + player1.richting + player1.levensTotaal);

//                System.out.println(enemy1.xPositie + enemy1.yPositie + enemy1.snelheid + enemy1.richting + enemy1.isLevend);
//                System.out.println(enemy2.xPositie + enemy2.yPositie + enemy2.snelheid + enemy2.richting + enemy2.isLevend);
            System.out.println();

            System.out.println(bullet1.xPositie + bullet1.yPositie + bullet1.snelheid + bullet1.richting);
            System.out.println(bullet2.xPositie + bullet2.yPositie + bullet2.snelheid + bullet2.richting);
            System.out.println(bullet3.xPositie + bullet3.yPositie + bullet3.snelheid + bullet3.richting);
            System.out.println(bullet4.xPositie + bullet4.yPositie + bullet4.snelheid + bullet4.richting);

            go.printPlayer();
            go.printEnemy();
            go.printBullet();
        }
    }
}

