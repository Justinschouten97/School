package book._05_Iteratie_statements.ex._06;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    for (int rij = 1; rij < 3; rij++)
    {
      for (int kolom = 1; kolom < 4; kolom++)
      {
        if (rij == 1 && kolom == 3)
        {
          System.out.println("rij: " + 1 + " kolom: " + 3 + " is gevonden");
          break;
        }
        System.out.println("rij: " + rij + " kolom: " + kolom + ", ");
      }
    }
  }
}
