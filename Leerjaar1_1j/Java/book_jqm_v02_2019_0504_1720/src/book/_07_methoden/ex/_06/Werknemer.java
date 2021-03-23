package book._07_methoden.ex._06;

public class Werknemer
{
  String naam; // instantievariabelen
  double brutoloon = 3300; // instantievariabelen
  static int aantalWerknemers = 300; // klassenvariabelen
  public double berekenNettoloon()
  {
    double belastingtarief = 0.30; // lokale variabele
    double nettoloon = brutoloon - (brutoloon * belastingtarief);
    return nettoloon;
  }
  public static void main(String[] args)
  {
    Werknemer wn = new Werknemer();
    System.out.print(wn.brutoloon + ", ");
    System.out.print(Werknemer.aantalWerknemers);
  }
}
