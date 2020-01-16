package book._06_klassen_objecten_constructoren.qz01;

public class Werknemer
{
  // instantievariabelen
  String naam = "Anna";
  int leeftijd = 22;
  
  public static void main(String[] args)
  {
    // het maken van de objecten wn en wn2
    Werknemer wn = new Werknemer();
    Werknemer wn2 = new Werknemer();
    wn.naam = "Jan";
    wn.leeftijd = 20;
    System.out.print(wn.naam + " ");
    System.out.print(wn2.leeftijd + " ");
  }
}
