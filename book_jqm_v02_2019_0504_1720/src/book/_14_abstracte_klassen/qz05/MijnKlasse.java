package book._14_abstracte_klassen.qz05;

public class MijnKlasse extends MijnAbstract
{
  void methodeA()
  {
    System.out.print("x");
  }
  void methodeA(int x)
  {
    System.out.print("y" + x);
  }
  String methodeB(String s)
  {
    return s + x;
  }
  String methodeB(int x)
  {
    return "x" + x;
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.methodeA();
    System.out.print(mk.methodeB("y"));
  }
}
