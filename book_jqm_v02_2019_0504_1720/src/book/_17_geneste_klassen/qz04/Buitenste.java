package book._17_geneste_klassen.qz04;

class Buitenste
{
  static int x = 3;
  Buitenste()
  {
    x += 4;
  }
  static class Nest
  {
    Nest()
    {
      x += 2;
    }
    int methode(int i)
    {
      System.out.print(x);
      return i + x;
    }
  }
  public static void main(String[] args)
  {
    Buitenste.Nest nest = new Buitenste.Nest();
    System.out.print(nest.methode(2));
  }
}
