package book._07_methoden.ex._08;

public class Wikkelklasse
{
  public static void main(String[] args)
  {
    String str = "8";
    Integer intObject = Integer.valueOf(str);
    int intType = intObject.intValue();
    System.out.print(intType);
  }
}
