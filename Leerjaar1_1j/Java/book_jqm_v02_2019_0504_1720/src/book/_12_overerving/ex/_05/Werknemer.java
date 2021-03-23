package book._12_overerving.ex._05;

public class Werknemer
{
  public double berekenNettoloon()
  {
    double nettoloon = 3000 - (3000 * 30) / 100;
    return nettoloon;
  }
  public double berekenNettoloon(double brutoloon)
  {
    double nettoloon = brutoloon - (brutoloon * 30) / 100;
    return nettoloon;
  }
  public double berekenNettoloon(int belastingtarief)
  {
    double nettoloon = 2400 - (2400 * belastingtarief) / 100;
    return nettoloon;
  }
  public double berekenNettoloon(double brutoloon, int belastingtarief)
  {
    double nettoloon = brutoloon - (brutoloon * belastingtarief) / 100;
    return nettoloon;
  }
  public double berekenNettoloon(int belastingtarief, double brutoloon)
  {
    double nettoloon = brutoloon - (brutoloon * belastingtarief) / 100;
    return nettoloon;
  }
  public static void main(String[] args)
  {
    Werknemer wn = new Werknemer();
    System.out.println(wn.berekenNettoloon());
    System.out.println(wn.berekenNettoloon(2500.65));
    System.out.println(wn.berekenNettoloon(25));
    System.out.println(wn.berekenNettoloon(2000.0, 35));
    System.out.println(wn.berekenNettoloon(40, 2000.0));
  }
}
