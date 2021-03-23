package book._05_Iteratie_statements.ex._04;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    for (int i = 0; i < 20; i++)
    {
      if (i == 7)
      {
        break;
      }
      System.out.print(i);
    }
  }
}
