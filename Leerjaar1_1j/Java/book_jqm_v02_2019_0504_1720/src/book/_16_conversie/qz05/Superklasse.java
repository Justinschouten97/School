package book._16_conversie.qz05;

public class Superklasse
{
  public Superklasse()
  {
    System.out.print("m");
  }
  public void methode()
  {
    System.out.print("s");
  }
  public void methode(int i)
  {
    methode();
    System.out.print("k" + i);
  }
}