package book._05_Iteratie_statements.qz02;

public class MijnLoop
{
  public static void main(String[] args)
  {
    int i = 8;
    
    while (i > 1)
    {
      i++;
      System.out.print(i);
      i -= 5;
    }
  }
}
