package book._15_interfaces.qz03;

public class MijnKlasse extends Superklasse
{
  int x = 6;
  public void mijnMethode(String s)
  {
    mijnMethode();
    System.out.print("q" + s + x);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode("w");
  }
}
