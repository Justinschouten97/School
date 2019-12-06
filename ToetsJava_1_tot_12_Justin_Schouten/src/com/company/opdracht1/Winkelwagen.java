package com.company.opdracht1;

import java.util.ArrayList;

public class Winkelwagen {
    ArrayList<Winkelwagen> artikelen = new ArrayList<>();


    public void voegArtikelToe() {


    }

    public void getTotaalPrijs() {
//        for (int i = 0; i < artikelen.size(); i++) {
//            artikelen.add()
//        }
//
//
//        }
    }


            public static void main (String[]args){
                char euro = '\u20AC';

                Artikel art1 = new Artikel("Schoenen " + "prijs " + euro, 79.95);
                Artikel art2 = new Artikel("Overhemd " + "prijs " + euro, 21.53);
                Artikel art3 = new Artikel("Laptop " + "prijs " + euro, 749.99);
                Artikel art4 = new Artikel("Muis " + "prijs " + euro, 749.99);
                Artikel art5 = new Artikel("Tv " + "prijs " + euro, 1169.80);

                System.out.println(art1.naam + art1.prijs);
                System.out.println(art2.naam + art2.prijs);
                System.out.println(art3.naam + art3.prijs);
                System.out.println(art4.naam + art4.prijs);
                System.out.println(art5.naam + art5.prijs);
            }
        }
