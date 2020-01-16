package book._11_statische_leden.qz04;

public class MijnKlasse
{
  static int x = 2;
  MijnKlasse()
  {
    x += 4;
  }
  static void methodeA(int i)
  {
    x = x - i;
  }
  int methodeB(int i)
  {
    return x + i;
  }
  public static void main(String[] args)
  {
    MijnKlasse mk1 = new MijnKlasse();
    MijnKlasse.methodeA(2);
    MijnKlasse mk2 = new MijnKlasse();
    System.out.print(mk2.methodeB(3));
  }
}
