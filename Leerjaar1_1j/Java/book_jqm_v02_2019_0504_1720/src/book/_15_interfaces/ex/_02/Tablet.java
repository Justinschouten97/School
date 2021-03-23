package book._15_interfaces.ex._02;

public class Tablet implements ArtikelInterface
{
  double prijs = 350;
  double korting = 0.20;
  boolean isStudent;
  public double prijsMetKorting()
  {
    // extra korting voor studenten
    if (isStudent)
    {
      korting = 0.25;
    }
    return prijs - (prijs * korting);
  }
}
