package book._14_abstracte_klassen.ex._01;

public class Cirkel extends Vorm
{
  private double straal;
  final double PI = 3.14;
  public Cirkel(double straal)
  {
    this.straal = straal;
  }
  public double oppervlakte()
  {
    return PI * straal * straal;
  }
  public double omtrek()
  {
    return 2 * PI * straal;
  }
}
