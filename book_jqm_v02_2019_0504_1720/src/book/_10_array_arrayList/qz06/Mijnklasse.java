package book._10_array_arrayList.qz06;

public class Mijnklasse
{
  void myMethod()
  {
    String strArray[] = { "n", "b", "a", "z" };
    for (int i = 0; i < strArray.length; i++)
    {
      if (strArray[i].equals("z"))
      {
        System.out.print("x1 ");
      }
      else if (strArray[i].equals("a"))
      {
        System.out.print("x2 ");
      }
      else if (strArray[i].equals("B"))
      {
        System.out.print("x2 ");
      }
      else
      {
        System.out.print("x3 ");
      }
    }
  }
  public static void main(String[] args)
  {
    Mijnklasse mk = new Mijnklasse();
    mk.myMethod();
  }
}
