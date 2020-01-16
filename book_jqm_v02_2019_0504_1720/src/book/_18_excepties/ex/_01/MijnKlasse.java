package book._18_excepties.ex._01;

public class MijnKlasse
{
  public static int deling(int teller, int noemer)
  {
    System.out.println("De methode deling()");
    return teller / noemer;
  }
  public static void printResultaat(int teller, int noemer)
  {
    int gemiddelde = deling(teller, noemer);
    System.out.println("Gemiddelde = " + gemiddelde);
    System.out.println("Einde printResultaat().");
  }
  public static void main(String[] args)
  {
    printResultaat(25, 0);
    System.out.println("Einde main().");
  }
}
