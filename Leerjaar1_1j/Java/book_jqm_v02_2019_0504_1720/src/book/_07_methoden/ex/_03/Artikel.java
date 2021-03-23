package book._07_methoden.ex._03;

public class Artikel
{
  double prijs = 160.0;
  double prijsMetKorting(double kortingspercentage)
  {
    double kortingBedrag = prijs * kortingspercentage;
    double kortingPrijs = prijs - kortingBedrag;
    return kortingPrijs;
  }
  public static void main(String[] args)
  {
    Artikel art = new Artikel();
    System.out.println("12%: Є" + art.prijsMetKorting(0.12));
    System.out.println("20%: Є" + art.prijsMetKorting(0.20));
    System.out.println("25%: Є" + art.prijsMetKorting(0.25));
    System.out.println("30%: Є" + art.prijsMetKorting(0.30));
  }
}
