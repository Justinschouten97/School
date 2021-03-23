package book._03_operatoren.qz05;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    boolean isDefect = true;
    int x = 2;
    int y = 7;
    int z = 9;
    
    if (x < y && x > 1)
    {
      System.out.print("N");
    }
    if (z > y || x > y)
    {
      System.out.print("O");
    }
    if (!isDefect)
    {
      System.out.print("P");
    }
  }
}
