package book._18_excepties.qz05;

public class MijnKlasse
{
  StringBuffer sb;
  int z;
  public void mijnMethode()
  {
    try
    {
      z = 5 / 0;
      sb.append("s");
    }
    catch (NullPointerException e)
    {
      System.out.print("n");
    }
    catch (ArithmeticException ae)
    {
      System.out.print("a");
    }
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode();
  }
}
