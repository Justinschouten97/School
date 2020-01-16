package book._01_object_georienteerd_programmeren.qz02;

public class Dier
{
  String naam;
  String soort = "huisdier";
  
  public static void main(String[] args)
  {
    Dier dier1 = new Dier();
    Dier dier2 = new Dier(); 
    Dier dier3 = new Dier();
    
    dier1.naam = "Tijger";
    dier1.soort = "roofdier";
    dier2.naam = "Hond";
    dier3.naam = "Koe";

    System.out.print(dier1.naam +", "+dier3.soort);
  }
}

