package book._14_abstracte_klassen.ex._01;

public class Test
{
  public static void main(String[] args)
  {
    Rechthoek rec = new Rechthoek(22, 34);
    Cirkel cir = new Cirkel(100);
    System.out.println("Rechthoek oppervlakte: " + rec.oppervlakte());
    System.out.println("Rechthoek omtrek:      " + rec.omtrek());
    System.out.println("Cirkel oppervlakte:    " + cir.oppervlakte());
    System.out.println("Cirkel omtrek:         " + cir.omtrek());
  }
}
