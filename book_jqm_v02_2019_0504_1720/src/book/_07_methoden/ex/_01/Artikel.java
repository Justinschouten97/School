package book._07_methoden.ex._01;

public class Artikel
{
  double prijs = 160.0;
  
  double prijsMetKorting()
  {
    double kortingBedrag = prijs * 0.20;
    double kortingPrijs = prijs - kortingBedrag;
    return kortingPrijs;
  }
  public static void main(String[] args)
  {
    Artikel art = new Artikel();
    System.out.println("Prijs met 20% korting is Є" + art.prijsMetKorting());
  }
}
