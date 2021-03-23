package book._05_Iteratie_statements.qz06;

public class MijnLoop
{
  public static void main(String[] args)
  {
    int x = 1;
    for (int i = 1; i < 7; i += 2)
    {
      x += i;
    }
    x -= 2;
    System.out.print(x);
  }
}
