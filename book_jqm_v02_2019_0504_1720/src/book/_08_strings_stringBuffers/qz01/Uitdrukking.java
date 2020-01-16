package book._08_strings_stringBuffers.qz01;

public class Uitdrukking
{
  String strSpreekwoord = "De aanval is de beste verdediging.";
  public void mijnMethode()
  {
    System.out.print(strSpreekwoord.charAt(5));
    System.out.print(", " + strSpreekwoord.indexOf("d"));
    System.out.print(", " + strSpreekwoord.indexOf("i"));
  }
  public static void main(String[] args)
  {
    Uitdrukking ut = new Uitdrukking();
    ut.mijnMethode();
  }
}
