package book._12_overerving.ex._02;

public class Programmeur extends Werknemer
{
  String programmeertaal;
  public void printInfo()
  {
    super.printInfo();
    System.out.println("Programmeertaal:  " + programmeertaal);
  }
}
