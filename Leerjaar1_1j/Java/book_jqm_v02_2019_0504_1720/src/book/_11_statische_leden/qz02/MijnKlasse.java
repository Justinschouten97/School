package book._11_statische_leden.qz02;

public class MijnKlasse
{
  static int x = 3;
  public MijnKlasse()
  {
    x++;
  }
  public static int mijnMethode(int i, int i2)
  {
    x += (i - i2);
    return x;
  }
  public static void main(String[] args)
  {
    MijnKlasse mk1 = new MijnKlasse();
    MijnKlasse mk2 = new MijnKlasse();
    System.out.print(MijnKlasse.x + ", ");
    MijnKlasse mk3 = new MijnKlasse();
    MijnKlasse.mijnMethode(8, 3);
    System.out.print(MijnKlasse.x);
  }
}
