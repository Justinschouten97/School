package book._14_abstracte_klassen.ex._01;

public class Rechthoek extends Vorm
{
  private double breedte;
  private double lengte;
  public Rechthoek(double breedte, double lengte)
  {
    this.breedte = breedte;
    this.lengte = lengte;
  }
  public double oppervlakte()
  {
    return breedte * lengte;
  }
  public double omtrek()
  {
    return 2 * (breedte + lengte);
  }
}
