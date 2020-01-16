package book._05_Iteratie_statements.qz11;

public class Theater
{
  public static void main(String[] args)
  {
    outer:for (int rij = 1; rij < 4; rij++)
    {
      for (int kol = 1; kol < 5; kol++)
      {
        if (rij == 2 && kol == 3)
        {
          break outer;
        }
        System.out.print(rij + "," + kol + " ");
      }
    }
  }
}
