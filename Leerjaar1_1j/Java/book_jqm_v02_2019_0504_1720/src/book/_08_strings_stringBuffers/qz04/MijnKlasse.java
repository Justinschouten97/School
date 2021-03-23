package book._08_strings_stringBuffers.qz04;

public class MijnKlasse
{
  String str = "He$llo $World$";
  public void mijnMethode()
  {
    System.out.println(str.replace("$", ""));
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode();
  }
}
