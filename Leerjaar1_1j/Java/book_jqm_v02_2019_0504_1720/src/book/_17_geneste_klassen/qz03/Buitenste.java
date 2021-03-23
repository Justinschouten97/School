package book._17_geneste_klassen.qz03;

class Buitenste
{
  private int x = 2;
  Buitenste()
  {
    this(3);
    x++;
  }
  Buitenste(int i)
  {
    x += i;
    System.out.print(x);
  }
  class Inwendige
  {
    public void methodeA()
    {
      x -= 3;
      System.out.print(x);
    }
  }
  public static void main(String[] args)
  {
    Buitenste.Inwendige in = new Buitenste().new Inwendige();
    in.methodeA();
  }
}
