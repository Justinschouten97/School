package book._05_Iteratie_statements.qz08;

public class MijnLoop
{
  public static void main(String[] args)
  {
    int x = 17;
    int y = 3;
    for (int i = 0; i < 10; i++)
    {
      x += 2;
      y += 5;
      if (x >= 21)
      {
        break;
      }
    }
    System.out.print(y);
  }
}
