package book._07_methoden.qz03;

public class MijnKlasse
{
  int i = 3;
  int i2 = 8;
  public MijnKlasse()
  {
    i += 4;
    i2 += 2;
  }
  public void print()
  {
    int x = i + i2;
    System.out.print(x);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.print();
  }
}
