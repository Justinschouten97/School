package book._11_statische_leden.qz05;

public class MijnKlasse
{
  static int x;
  static StringBuffer sb = new StringBuffer();
  public MijnKlasse()
  {
    mijnMethode();
  }
  public void mijnMethode()
  {
    x += 3;
    sb.append(x);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    MijnKlasse mk2 = new MijnKlasse();
    MijnKlasse mk3 = new MijnKlasse();
    System.out.println(mk.sb);
  }
}
