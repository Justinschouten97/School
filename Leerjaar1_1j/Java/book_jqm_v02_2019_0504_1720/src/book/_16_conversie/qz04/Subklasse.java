package book._16_conversie.qz04;

public class Subklasse extends Superklasse
{
  Subklasse()
  {
    x += 2;
    System.out.print("P");
  }
  int mijnMethode()
  {
    return x + 4;
  }
  public static void main(String[] args)
  {
    Superklasse superK = new Subklasse();
    System.out.print(superK.mijnMethode());
  }
}
