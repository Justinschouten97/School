package book._18_excepties.ex._07;

public class MijnKlasse
{
  public static int deling(int teller, int noemer)
  {
    System.out.println("De methode deling()");
    return teller / noemer;
  }
  public static void printResultaat(int teller, int noemer)
  {
    try
    {
      int gemiddelde = deling(teller, noemer);
      System.out.println("Gemiddelde = " + gemiddelde);
    }
    catch (ArithmeticException ae)
    {
      System.out.println(ae);
      System.out.println("Exceptie-afhandeling");
    }
    finally
    {
      System.out.println("finally");
    }
  }
  public static void main(String[] args)
  {
    printResultaat(25, 0);
    System.out.println("Einde main().");
  }
}
