package book._08_strings_stringBuffers.qz05;

public class MijnKlasse
{
  String mijnStr = " de aarde is 4,6 miljard jaar oud ";
  public void mijnMethode()
  {
    int strLength = mijnStr.length();
    mijnStr = mijnStr.toUpperCase();
    mijnStr = mijnStr.trim();
    System.out.println(strLength + " " + mijnStr + " " + mijnStr.length());
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    mk.mijnMethode();
  }
}
