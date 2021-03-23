package book._03_operatoren.ex._01;

public class IfBlok
{
  public static void main(String[] args)
  {
    if (13 == 6)
    {
      System.out.print("N");
      /* Dit Blok wordt genegeerd. N wordt niet geschreven naar 
      de standaarduitvoer, omdat 13 niet gelijk is aan 6 */
    }
    if (12 <= 22)
    {
      System.out.print("X");
      /* Schrijft X naar de standaarduitvoer, 
      omdat 12 kleiner is dan 22 */
    }
    if (21 > 8 && 3 != 5)
    {
      System.out.print("U");
      /* Schrijft U naar de standaarduitvoer, omdat 
      21 groter is dan 8 en 3 ongelijk is aan 5*/
    }
  }
}
