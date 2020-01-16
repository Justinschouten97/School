package book._06_klassen_objecten_constructoren.qz02;

public class MijnKlasse
{
  int x;
  int y = 7;
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.x = 5;
    mk.y = 8;
    MijnKlasse mk2 = new MijnKlasse();
    MijnKlasse mk3 = mk;
    System.out.print(mk.x + ", " + mk2.x + ", " + mk3.y);
  }
}
