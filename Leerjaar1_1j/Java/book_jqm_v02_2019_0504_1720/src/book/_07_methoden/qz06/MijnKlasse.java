package book._07_methoden.qz06;

public class MijnKlasse
{
  public void mijnMethode(int x, int y)
  {
    int z = 4;
    int i = 3;
    i++;
    if (x < y)
    {
      z += 4;
    }
    if (x * x > y)
    {
      z += 2;
    }
    else
    {
      z += 6;
    }
    z++;
    System.out.print(z);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode(3, 9);
  }
}
