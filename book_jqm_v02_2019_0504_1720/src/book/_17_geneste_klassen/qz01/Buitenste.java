package book._17_geneste_klassen.qz01;

public class Buitenste
{
  int x;
  Buitenste()
  {
    x += 4;
  }
  class Inwendige
  {
    int x;
    public void methodeA()
    {
      x++;
      System.out.print(x);
    }
  }
  public static void main(String[] args)
  {
    Buitenste.Inwendige in = new Buitenste().new Inwendige();
    in.methodeA();
  }
}
