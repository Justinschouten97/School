package book._08_strings_stringBuffers.qz07;

public class MijnKlasse
{
  StringBuffer sb = new StringBuffer("Hij is vriend.");
  public void mijnMethode()
  {
    // de code hier invoegen
    System.out.print(sb);
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode();
  }
}
