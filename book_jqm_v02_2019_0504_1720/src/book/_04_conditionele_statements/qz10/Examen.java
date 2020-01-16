package book._04_conditionele_statements.qz10;

public class Examen
{
  public static void main(String args[])
  {
    char resultaat = 'C';
    switch (resultaat)
    {
      case 'A':
        System.out.print("Uitstekend! ");
        break;
      case 'B':
        System.out.print("Zeer goed ");
        break;
      case 'C':
      case 'D':
        System.out.print("Goed ");
      case 'E':
        System.out.print("Probeer het opnieuw ");
        break;
      default:
        System.out.print("Ongeldig ");
    }
  }
}
