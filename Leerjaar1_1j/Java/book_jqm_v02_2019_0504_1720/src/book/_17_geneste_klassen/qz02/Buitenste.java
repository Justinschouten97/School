package book._17_geneste_klassen.qz02;

public class Buitenste
{
  private int a = 2;
  Buitenste()
  {
    a += 4;
  }
  class Inwendige
  {
    Inwendige()
    {
      a++;
    }
  }
  public static void main(String[] args)
  {
    Buitenste bt = new Buitenste();
    Inwendige in = bt.new Inwendige();
    System.out.print(bt.a);
  }
}
