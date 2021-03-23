package book._04_conditionele_statements.ex._06;

public class Weekdagen
{
  public static void main(String[] args)
  {
    int dag = 4;
    
    if (dag > 0 && dag <= 5)
    {
      System.out.print("Werkdag");
    }
    else if (dag == 6 || dag == 7)
    {
      System.out.print("Weekend");
    }
    else
    {
      System.out.print("Ongeldig");
    }
  }
}
