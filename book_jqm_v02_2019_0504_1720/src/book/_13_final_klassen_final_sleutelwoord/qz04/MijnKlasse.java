package book._13_final_klassen_final_sleutelwoord.qz04;

public final class MijnKlasse extends Superklasse
{
  void methodeA(int x, int y)
  {
    int z = x - y;
    System.out.print(z);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.methodeA(5, 3.0);
  }
}
