package book._04_conditionele_statements.qz02;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    int a = 3;
    int b = 1;
    int x = 0;
    
    if (a > b)
    {
      x++;
      if (a > x)
      {
        x += 5;
      }
      x -= 4;
    }
    if (b == a)
    {
      x += 2;
      if (x < b)
      {
        x += 3;
      }
    }
    System.out.print(x);
  }
}
