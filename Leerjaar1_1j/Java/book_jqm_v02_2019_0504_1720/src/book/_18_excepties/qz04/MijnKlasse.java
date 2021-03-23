package book._18_excepties.qz04;

public class MijnKlasse
{
  int x;
  public void methode()
  {
    try
    {
      int i = 2 / x;
      System.out.print("a");
    }
    catch (NullPointerException n)
    {
      System.out.print("b");
    }
    catch (ArithmeticException e)
    {
      System.out.print("d");
    }
    finally
    {
      System.out.print("f");
    }
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.methode();
  }
}
