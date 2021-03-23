package book._06_klassen_objecten_constructoren.qz03;

public class MijnKlasse
{
  int x = 2;
  int y = 5;
  // no-argument-constructor
  MijnKlasse()
  {
  }
  // een-argument-constructor
  MijnKlasse(int x)
  {
    this.y = x;
  }
  // twee-argumenten-constructor
  MijnKlasse(int x, int y)
  {
    this.x = x;
    this.y = y;
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    MijnKlasse mk2 = new MijnKlasse(7);
    MijnKlasse mk3 = new MijnKlasse(9, 3);
    System.out.print(mk.y + ", " + mk2.y + ", " + mk3.x);
  }
}
