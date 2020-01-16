package book._13_final_klassen_final_sleutelwoord.qz01;

public class MijnKlasse
{
  final int x = 3;
  int bereken(int y, int z)
  {
    if (y >= z)
    {
      return y + x;
    }
    else
    {
      // y = 5; /* 1 */
      // z += 3; /* 2 */
      // z = x / 2; /* 3 */
      // int x = 6; /* 4 */
      // x ++ ; /* 5 */
      return z + x;
    }
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    System.out.println(mk.bereken(4, 6));
  }
}
