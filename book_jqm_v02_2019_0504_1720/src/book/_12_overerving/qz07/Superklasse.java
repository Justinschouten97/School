package book._12_overerving.qz07;

public class Superklasse
{
  Superklasse(String naam)
  {
    this(naam, "d");
    System.out.print(naam);
  }
  Superklasse(String naam, String naam2)
  {
    System.out.print(naam);
    System.out.print(naam2);
  }
}
