package book._08_strings_stringBuffers.ex._03;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    StringBuffer sb = new StringBuffer("Het universum bestaat al 13,8 miljard");
    System.out.println(sb.append(" jaar."));
    System.out.println(sb.insert(25, "ongeveer "));
    System.out.println(sb.delete(3, 13));
  }
}
