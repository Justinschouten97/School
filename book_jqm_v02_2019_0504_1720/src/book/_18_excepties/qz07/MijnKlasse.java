package book._18_excepties.qz07;

public class MijnKlasse
{
  public static void test(String str)
  {
    if (str == null)
    {
      throw new NullPointerException();
    }
    else
    {
      throw new RuntimeException();
    }
  }
  public static void main(String[] args)
  {
    try
    {
      System.out.print("A");
      test("");
    }
    catch (NullPointerException e)
    {
      System.out.print("B");
    }
    catch (Exception e)
    {
      System.out.print("C");
    }
    finally
    {
      System.out.print("D");
    }
  }
}
