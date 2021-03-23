package book._05_Iteratie_statements.ex._05;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    for (int i = 1; i <= 7; i++)
    {
      if (i == 3 || i == 5)
      {
        continue;
      }
      System.out.print(i);
    }
  }
}
