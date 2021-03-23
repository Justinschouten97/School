package book._07_methoden.ex._05;

public class Wiskunde
{
  int som(int getal1, int getal2, int getal3)
  {
    int som = getal1 + getal2 + getal3;
    return som;
  }
  public static void main(String[] args)
  {
    Wiskunde w = new Wiskunde();
    System.out.println("17 + 340 + 23  = " + w.som(17, 340, 23));
    System.out.println("23 + 450 + 353 = " + w.som(23, 450, 353));
    System.out.println("354 + 12 + 578 = " + w.som(354, 12, 578));
    System.out.println("37 + 670 + 45  = " + w.som(37, 670, 45));
  }
}
