package book._15_interfaces.qz01;

public class MijnKlasse implements MijnInterface
{
  public void methode()
  {
    // x ++ ; /* 1*/
    System.out.print(x);
  }
  public void methode(int i)
  {
    int z = i;
    // z = z + x; /* 2*/
    methode();
    System.out.print(z);
  }
  public static void main(String[] args)
  {
    new MijnKlasse().methode(4);
  }
}
