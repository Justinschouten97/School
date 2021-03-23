package book._12_overerving.qz01;

public class Subklasse extends Superklasse
{
  private int y = 3;
  Subklasse()
  {
    x += 2;
    y++;
    System.out.print(x + ", " + y);
  }
  public static void main(String[] args)
  {
    Subklasse sk = new Subklasse();
  }
}
