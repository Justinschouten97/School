package book._07_methoden.ex._04;

public class Artikel
{
  double prijs = 70.0;
  /* 
   * in de volgende methode kun je een gewenste
   * waarde toekennen aan de variabele prijs 
   */
  void setPrijs(double prijs)
  {
    this.prijs = prijs;
  }
  public static void main(String[] args)
  {
    Artikel art = new Artikel();
    System.out.println("De prijs was: Є" + art.prijs);
    art.setPrijs(40.55);
    System.out.println("De prijs is:  Є" + art.prijs);
    art.setPrijs(61.35);
    System.out.println("De prijs is:  Є" + art.prijs);
    art.setPrijs(54.25);
    System.out.println("De prijs is:  Є" + art.prijs);
  }
}
