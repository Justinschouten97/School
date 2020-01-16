package book._05_Iteratie_statements.qz09;

public class Schrikkeljaar
{
  public static void main(String[] args)
  {
    for (int jaar = 1993; jaar <= 2001; jaar++)
    {
      if ((jaar % 4 != 0))
      {
        continue;
      }
      System.out.print(jaar + " ");
    }
  }
}
