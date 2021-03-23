package book._07_methoden.qz04;

public class MijnKlasse
{
  int x = 2;
  public void print()
  {
    for (int i = 0; i <= 3; i++)
    {
      if (i < 2)
      {
        x++;
      }
      else
      {
        x += 2;
      }
    }
    System.out.print(x);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.print();
  }
}
