package book._12_overerving.ex._04;

public class Werknemer
{
  protected String naam;
  protected int leeftijd;
  protected double salaris;
  public Werknemer(String naam)
  {
    this.naam = naam;
    System.out.print(naam + " ");
  }
}