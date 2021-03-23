package book._07_methoden.ex._02;

public class Artikel
{
  double prijs = 70.0;
  // de volgende methode wijzigt de prijs
  void setPrijs()
  {
    this.prijs = 80.0;
  }
  public static void main(String[] args)
  {
    Artikel art = new Artikel();
    System.out.println("De prijs was: Є " + art.prijs);
    // bij het aanroepen van de methode wordt de prijs veranderd
    art.setPrijs();
    System.out.println("De prijs is:  Є " + art.prijs);
  }
}
