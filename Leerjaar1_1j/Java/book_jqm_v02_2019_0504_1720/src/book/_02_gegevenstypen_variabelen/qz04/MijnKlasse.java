package book._02_gegevenstypen_variabelen.qz04;

public class MijnKlasse
{
  int i1 = 7;
  int i2 = 12;
  
  public static void main(String[] args)
  {
    MijnKlasse mk = new MijnKlasse();
    
    mk.i1 = mk.i1 - 3;
    mk.i2 = mk.i2 + mk.i1;
    System.out.print(mk.i1 + ", ");
    System.out.print(mk.i2);
  }
}
