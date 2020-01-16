package book._12_overerving.ex._02;

public class TestWerknemer
{
  public static void main(String[] args)
  {
    Werknemer wn = new Werknemer();
    Programmeur prog = new Programmeur();
    wn.naam = "Jan";
    wn.leeftijd = 23;
    wn.salaris = 2100.55;
    prog.naam = "Emma";
    prog.leeftijd = 32;
    prog.salaris = 3200.45;
    prog.programmeertaal = "Java";
    wn.printInfo();
    prog.printInfo();
  }
}
