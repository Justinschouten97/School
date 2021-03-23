package book._05_Iteratie_statements.qz10;

public class Minitheater
{
  public static void main(String[] args)
  {
    for (int rij = 1; rij < 3; rij++)
    {
      for (int kol = 1; kol < 4; kol++)
      {
        System.out.print(rij + "," + kol + " ");
      }
    }
  }
}
