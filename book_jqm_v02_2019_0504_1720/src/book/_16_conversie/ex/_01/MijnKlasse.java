package book._16_conversie.ex._01;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    int i = 31;
    int i2 = 2;
    double d1 = i;
    double d2 = i2;
    double d3 = d1 / d2;
    double d4 = (double) i / i2;
    System.out.println(d3);
    System.out.println(d4);
  }
}
