package book._01_object_georienteerd_programmeren.ex._03;

class Werknemer
{
  String naam;
  int leeftijd;
  double salaris;
  
  public static void main(String[] args)
  {
    // object wn1 maken
    Werknemer wn1 = new Werknemer();
    // waarden toekennen aan de variabelen van het object wn1
    wn1.naam = "Emma";
    wn1.leeftijd = 24;
    wn1.salaris = 2400;
    
    // object wn2 maken
    Werknemer wn2 = new Werknemer();
    // waarden toekennen aan de variabelen van het object wn2
    wn2.naam = "Hans";
    wn2.leeftijd = 32;
    wn2.salaris = 2800;
  }
}
