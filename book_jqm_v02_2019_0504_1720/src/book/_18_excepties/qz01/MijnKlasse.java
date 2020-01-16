package book._18_excepties.qz01;

public class MijnKlasse
{
  public void methode()
  {
    try
    {
      System.out.print("x");
      int x = Integer.parseInt("hi");
      System.out.print("y");
    }
    catch (NumberFormatException e)
    {
      System.out.print("z");
    }
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.methode();
  }
}
