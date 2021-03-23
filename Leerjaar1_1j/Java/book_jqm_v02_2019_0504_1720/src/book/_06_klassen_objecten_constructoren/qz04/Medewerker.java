package book._06_klassen_objecten_constructoren.qz04;

public class Medewerker
{
  String naam = "Ron";
  double salaris = 400.0;
  Medewerker(String naam)
  {
    this(naam, 780.0);
  }
  Medewerker(String naam, double salaris)
  {
    this.naam = naam;
    this.salaris = salaris;
  }
  public static void main(String[] args)
  {
    Medewerker md = new Medewerker("Henk");
    System.out.print(md.naam + ", " + md.salaris);
  }
}
