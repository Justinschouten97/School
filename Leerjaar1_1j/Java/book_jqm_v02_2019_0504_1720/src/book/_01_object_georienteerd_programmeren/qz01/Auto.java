package book._01_object_georienteerd_programmeren.qz01;

public class Auto
{
  String merk;
  int kilometerstand;
  double prijs;
  
  public static void main(String[] args)
  {
    Auto auto1 = new Auto();
    Auto auto2 = new Auto();
    Auto auto3 = new Auto();

    auto1.merk = "Volkswagen";
    auto1.kilometerstand = 4000;
    auto1.prijs = 4500;
    auto2.merk = "Mazda";
    auto2.kilometerstand = 2000;
    auto2.prijs = 3500;
    auto3.merk = "Nissan";
    auto3.kilometerstand = 7000;
    auto3.prijs = 6500;

    System.out.println( auto2.merk + ", " + auto3.prijs + ", " + auto1.kilometerstand);
  }
}
