package book._05_Iteratie_statements.qz07;

public class MijnLoop
{
  public static void main(String[] args)
  {
    char c = 'a';
    char c2 = 'b';
    for (int i = 4; i >= 0; i--)
    {
      if (i >= 3 || i == 1)
      {
        System.out.print(c2);
      }
      else
      {
        System.out.print(c);
      }
    }
  }
}
