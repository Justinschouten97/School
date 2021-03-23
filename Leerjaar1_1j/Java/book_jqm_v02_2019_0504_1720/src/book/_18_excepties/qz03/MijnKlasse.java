package book._18_excepties.qz03;

public class MijnKlasse
{
  String str;
  public void methode()
  {
    try
    {
      str.substring(1);
      System.out.print("s");
    }
    catch (NullPointerException e)
    {
      System.out.print("x");
    }
    catch (Exception e)
    {
      System.out.print("y");
    }
    finally
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
