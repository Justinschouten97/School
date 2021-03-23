package book._06_klassen_objecten_constructoren.qz05;

public class MijnKlasse
{
  int x = 3;
  int y = 5;
  MijnKlasse()
  {
    this(4, 6);
  }
  MijnKlasse(int x, int y)
  {
    this.y = y;
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    MijnKlasse mk2 = new MijnKlasse(9, 7);
    System.out.print(mk.x + ", " + mk.y + ", " + mk2.x + ", " + mk2.y);
  }
}
