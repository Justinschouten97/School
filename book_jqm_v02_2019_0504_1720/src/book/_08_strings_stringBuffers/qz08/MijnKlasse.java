package book._08_strings_stringBuffers.qz08;

public class MijnKlasse
{
  StringBuffer sb = new StringBuffer("Hij was haar vriend");
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
