package book._02_gegevenstypen_variabelen.qz02;

public class MijnVariabele
{
  byte b = 80;
  short s;
  float f1 = 3.50f;
  float f2;
  double d;
  
  public static void main(String[] args)
  {
    MijnVariabele mv = new MijnVariabele();
    
    System.out.print(mv.b + ", ");
    System.out.print(mv.s + ", ");
    System.out.print(mv.f1 + ", ");
    System.out.print(mv.f2 + ", ");
    System.out.print(mv.d);
  }
}
