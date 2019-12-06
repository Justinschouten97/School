package tools.h10.opdrh9;

import java.util.ArrayList;

public class Winkelwagen {
    ArrayList<Artikel> artikelenlijst = new ArrayList<Artikel>();

    public void ArtikelenToevoegen() {
        char euro = '\u20AC';


        Artikel art1 = new Artikel("Overhemd" + " prijs " + euro, 20.39);
        Artikel art2 = new Artikel("Broek" + " prijs " + euro, 32.85);
        Artikel art3 = new Artikel("Sokken" + " prijs " + euro, 11.25);
        Artikel art4 = new Artikel("Jas" + " prijs " + euro, 120.65);

        artikelenlijst.add(art1);
        artikelenlijst.add(art2);
        artikelenlijst.add(art3);
        artikelenlijst.add(art4);
    }

    public static void main(String[] args) {
        Winkelwagen ww = new Winkelwagen();
        ww.ArtikelenToevoegen();

        for (int i = 0; i < ww.artikelenlijst.size(); i++) {

            System.out.println(ww.artikelenlijst.get(i).naam
                    + ww.artikelenlijst.get(i).prijs);


        }
    }
}
