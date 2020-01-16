package book._12_overerving.qz02;

public class Subklasse extends Superklasse
{
  Subklasse(int y)
  {
    x += y;
  }
  public static void main(String[] args)
  {
    Subklasse sk = new Subklasse(4);
    System.out.print(sk.x);
  }
}
