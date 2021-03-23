package book._11_statische_leden.ex._02;

public class Wiskunde
{
  public static int som(int i, int i2, int i3, int i4)
  {
    return i + i2 + i3 + i4;
  }
  public static void main(String[] args)
  {
    int x = som(5, 4, 6, 2);
    // of int x = Wiskunde.som(5,4,6,2);
    System.out.print(x);
  }
}
