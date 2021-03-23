package book._12_overerving.ex._01;

public class Werknemer
{
  String naam;
  int leeftijd;
  double salaris;
  String programmeertaal; // overbodig
  public void printInfo()
  {
    System.out.println("Naam:            " + naam);
    System.out.println("Leeftijd:        " + leeftijd);
    System.out.println("Salaris €        " + salaris);
    System.out.println("Programmeertaal: " + programmeertaal);
  }
}
