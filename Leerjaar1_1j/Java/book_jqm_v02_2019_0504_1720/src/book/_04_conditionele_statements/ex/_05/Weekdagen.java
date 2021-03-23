package book._04_conditionele_statements.ex._05;

public class Weekdagen
{
  public static void main(String[] args)
  {
    int dag = 4;
    switch (dag)
    {
      case 1: case 2: case 3: case 5:
        System.out.print("Werkdag");
        break;
      case 6: case 7:
        System.out.print("Weekend");
        break;
      default:
        System.out.print("Ongeldig");
    }
  }
}
