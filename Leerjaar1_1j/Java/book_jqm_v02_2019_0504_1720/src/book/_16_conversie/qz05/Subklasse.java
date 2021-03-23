package book._16_conversie.qz05;

public class Subklasse extends Superklasse
{
  public void methode()
  {
    System.out.print("t");
  }
  public static void main(String[] args)
  {
    Superklasse superK = new Subklasse();
    superK.methode(3);
  }
}
