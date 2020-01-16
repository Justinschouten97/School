package book._04_conditionele_statements.qz04;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    int a = 2;
    int b = 2;
    int x = 5;
    
    if(a == b)
    {
      x++;
    }
    else if(b == 2)
    {
      x += 2;
    }
    else
    {
      x += 3;
    }
    System.out.print(x);
  }
}
