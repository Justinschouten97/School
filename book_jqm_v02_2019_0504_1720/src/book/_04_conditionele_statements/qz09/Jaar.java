package book._04_conditionele_statements.qz09;

public class Jaar
{
  public static void main(String[] args)
  {
    int intMaand = 10;
    String strMaand;
    switch (intMaand)
    {
      case 1:
        strMaand = "jan ";
      case 2:
        strMaand = "feb ";
      case 3:
        strMaand = "mrt ";
      case 4:
        strMaand = "apr ";
      case 5:
        strMaand = "mei ";
      case 6:
        strMaand = "jun ";
      case 7:
        strMaand = "jul ";
      case 8:
        strMaand = "aug ";
      case 9:
        strMaand = "sep ";
      case 10:
        strMaand = "okt ";
      case 11:
        strMaand = "nov ";
      case 12:
        strMaand = "dec ";
        break;
      default:
        strMaand = "Ongeldig ";
    }
    System.out.println(strMaand);
  }
}
