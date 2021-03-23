package book._07_methoden.qz02;

public class MijnKlasse
{
  int i = 5;
  int i2 = 3;
  public int bereken()
  {
    i++;
    if (i <= i2)
    {
      return i * i2;
    }
    else if ((i + i2) >= 9)
    {
      return i + i2 + 5;
    }
    return i * i2 + 3;
  }
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    System.out.print(mk.bereken());
  }
}
