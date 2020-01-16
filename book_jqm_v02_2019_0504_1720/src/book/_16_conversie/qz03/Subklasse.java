package book._16_conversie.qz03;

public class Subklasse extends Superklasse
{
  int i = 3;

  public int methode()
  {
    return 2 * i;
  }
  public static void main(String[] args)
  {
    Superklasse s = new Subklasse();
    System.out.print(" " + s.i);
    System.out.print(" " + s.methode());
  }
}
