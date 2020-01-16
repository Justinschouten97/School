package book._03_operatoren.qz06;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    boolean isOud = false;
    int x = 5;
    int y = 14;
    int z = 18;
    
    if (y > x && z > y && (x + 12) >= z)
    {
      System.out.print("P");
    }
    if (x >= 6 || z <= y || z <= 18)
    {
      System.out.print("Q");
    }
    if (!isOud || y > z)
    {
      System.out.print("R");
    }
  }
}
