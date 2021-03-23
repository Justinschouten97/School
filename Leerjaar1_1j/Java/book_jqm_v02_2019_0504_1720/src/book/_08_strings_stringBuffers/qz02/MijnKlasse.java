package book._08_strings_stringBuffers.qz02;

public class MijnKlasse
{
  String str1 = "Noah";
  String str2 = new String("Noah");
  public void mijnMethode()
  {
    if (str1 == str2)
    {
      System.out.print("X");
    }
    if (str1.equals(str2))
    {
      System.out.print("Y");
    }
    else
    {
      System.out.print("Z");
    }
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode();
  }
}
