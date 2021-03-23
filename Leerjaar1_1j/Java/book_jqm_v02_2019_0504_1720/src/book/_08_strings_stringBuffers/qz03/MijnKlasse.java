package book._08_strings_stringBuffers.qz03;

public class MijnKlasse
{
  String strQuote = "We kunnen een probleem niet oplossen met" +
      " de denkwijze die het heeft veroorzaakt. Albert Einstein";
  public void mijnMethode()
  {
    System.out.println(strQuote.substring(23, 27));
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode();
  }
}
