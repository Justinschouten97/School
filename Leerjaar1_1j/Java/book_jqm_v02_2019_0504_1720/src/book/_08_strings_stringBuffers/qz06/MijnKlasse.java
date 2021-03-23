package book._08_strings_stringBuffers.qz06;

public class MijnKlasse
{
  StringBuffer sb = new StringBuffer();
  StringBuffer sb2 = new StringBuffer("Eva");
  public void mijnMethode()
  {
    sb.append("Sam ");
    sb2.append(" Lucas");
    sb.append(22);
    System.out.print(sb + ", " + sb2);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode();
  }
}
