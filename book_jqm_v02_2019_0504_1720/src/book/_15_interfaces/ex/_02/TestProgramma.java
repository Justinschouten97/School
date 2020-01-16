package book._15_interfaces.ex._02;

public class TestProgramma
{
  public static void main(String[] args)
  {
    Televisie tv = new Televisie();
    Televisie tv2 = new Televisie();
    tv.isZestigplusser = true;
    tv2.isZestigplusser = false;
    Tablet tab = new Tablet();
    Tablet tab2 = new Tablet();
    tab.isStudent = true;
    tab2.isStudent = false;
    System.out.println("Televisie");
    System.out.println("Prijs met extra korting: " + tv.prijsMetKorting());
    System.out.println("Prijs met korting:       " + tv2.prijsMetKorting());
    System.out.println("Tablet");
    System.out.println("Prijs met extra korting: " + tab.prijsMetKorting());
    System.out.println("Prijs met korting:       " + tab2.prijsMetKorting());
  }
}
