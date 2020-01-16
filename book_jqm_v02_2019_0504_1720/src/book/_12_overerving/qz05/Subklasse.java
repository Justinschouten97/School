package book._12_overerving.qz05;

public class Subklasse extends Superklasse
{
  int mijnMethode(int i, int i2)
  {
    return mijnMethode(i) + x + i2;
  }
  public static void main(String[] args)
  {
    Subklasse subK = new Subklasse();
    System.out.print(subK.mijnMethode(3, 6));
  }
}
