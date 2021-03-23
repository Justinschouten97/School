package book._12_overerving.ex._02;

public class Werknemer
{
  protected String naam;
  protected int leeftijd;
  protected double salaris;
  public void printInfo()
  {
    System.out.println("Naam:             " + naam);
    System.out.println("Leeftijd:         " + leeftijd);
    System.out.println("Salaris:          € " + salaris);
  }
}
