package book._12_overerving.qz04;

public class Subklasse extends SuperA
{
  public Subklasse()
  {
    x += 2;
    y += 3;
    System.out.print(" x" + x);
    System.out.print(" y" + y);
  }
  public static void main(String[] args)
  {
    Subklasse subK = new Subklasse();
  }
}
