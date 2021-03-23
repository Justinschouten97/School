package book._18_excepties.ex._05;

public class MijnKlasse
{
  public static int deling(int teller, int noemer)
  {
    System.out.println("De methode deling()");
    if (noemer == 0)
    {
      throw new ArithmeticException("Deling door nul");
    }
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
      System.out.println("Exceptie is afgehandeld in printResultaat()");
    }
  }
  public static void main(String[] args)
  {
    printResultaat(25, 0);
    System.out.println("Einde main().");
  }
}
