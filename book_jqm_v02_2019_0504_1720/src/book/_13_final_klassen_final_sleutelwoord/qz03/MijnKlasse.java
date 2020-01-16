package book._13_final_klassen_final_sleutelwoord.qz03;

public class MijnKlasse extends Superklasse
{
  int x = 3;
  String methodeA(String s, int i)
  {
    String str = s + ", " + i;
    return str;
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    System.out.print(mk.methodeA(23, "Emma"));
  }
}
