package book._04_conditionele_statements.qz05;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    int i = 1;
    int i2 = 4;
    int x = 2;
    
    if (i == (i2 - 3) && i2 > 5)
    {
      x++;
    }
    else if (i2 == 4)
    {
      x += 2;
    }
    else if (i2 > 3)
    {
      x += 3;
    }
    else
    {
      x += 4;
    }
    System.out.print(x);
  }
}
