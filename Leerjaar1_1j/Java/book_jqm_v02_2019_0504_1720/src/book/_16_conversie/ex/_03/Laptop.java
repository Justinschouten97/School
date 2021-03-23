package book._16_conversie.ex._03;

public class Laptop extends Computer
{
  private double gewicht;

  public double berekenPrijs()
  {
    return prijs - 20;
  }
  public static void main(String[] args)
  {
    Computer comp = new Laptop();
    Laptop lap = (Laptop) comp;
    Computer comp2 = new Computer();
    Laptop lap2 = (Laptop) comp2; // niet geldig
    System.out.println(comp.merk);
    System.out.println(comp.prijs);
    System.out.println(comp.berekenPrijs());
  }
}
