package book._15_interfaces.ex._02;

public class Televisie implements ArtikelInterface
{
  double prijs = 420;
  double korting = 0.30;
  boolean isZestigplusser;
  public double prijsMetKorting()
  {
    // extra korting voor zestigplussers
    if (isZestigplusser)
    {
      korting = 0.40;
    }
    return prijs - (prijs * korting);
  }
}
