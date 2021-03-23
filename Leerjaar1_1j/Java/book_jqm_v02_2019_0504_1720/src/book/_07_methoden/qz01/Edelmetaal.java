package book._07_methoden.qz01;

public class Edelmetaal
{
  double ozGoudPrijs = 1300.0; // de prijs van een ounce goud
  double ozZilverPrijs = 20.0; // de prijs van een ounce zilver
  boolean isGoud = true;
  public double berekenMetaalPrijs(boolean isGoud, int ounce)
  {
    if (isGoud)
    {
      return ozGoudPrijs * ounce;
    }
    else
    {
      return ozZilverPrijs * ounce;
    }
  }
  public static void main(String[] args)
  {
    Edelmetaal em = new Edelmetaal();
    System.out.print(em.berekenMetaalPrijs(false, 4));
    System.out.print(", ");
    System.out.print(em.berekenMetaalPrijs(true, 2));
  }
}
