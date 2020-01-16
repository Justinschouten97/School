package book._04_conditionele_statements.ex._04;

public class Weekdagen
{
  public static void main(String[] args)
  {
    int dag = 5;
    
    switch (dag)
    {
      case 1:
        System.out.print("maandag");
        break;
      case 2:
        System.out.print("dinsdag");
        break;
      case 3:
        System.out.print("woensdag");
        break;
      case 4:
        System.out.print("donderdag");
        break;
      case 5:
        System.out.print("vrijdag");
        break;
      case 6:
        System.out.print("zaterdag");
        break;
      case 7:
        System.out.print("zondag");
        break;
      default:
        System.out.print("Ongeldig");
    }
  }
}
