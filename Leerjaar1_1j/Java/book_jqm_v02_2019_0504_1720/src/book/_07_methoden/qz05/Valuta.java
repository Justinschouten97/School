package book._07_methoden.qz05;

public class Valuta
{
  // dollarkoers
  double euro = 0.907; // $ 1 = € 0.907
  double engelsePond = 0.762; // $ 1 = £ 0.762
  double zwitserseFranc = 0.986; // $ 1 = 0.986 CHF
  double chineseYuan = 6.674; // $ 1 = ¥ 6.674
  double russischeRoebel = 64.459; // $ 1 = 64.459 RUB
  public void omrekenenNaarDollar(char valuta, int bedrag)
  {
    switch (valuta)
    {
      case ('e'):
        System.out.print(bedrag * euro);
        break;
      case ('p'):
        System.out.print(bedrag * engelsePond);
        break;
      case ('f'):
        System.out.print(bedrag * zwitserseFranc);
        break;
      case ('y'):
        System.out.print(bedrag * chineseYuan);
        break;
      case ('r'):
        System.out.print(bedrag * russischeRoebel);
        break;
      default:
        System.out.print("Ongeldig");
    }
  }
  public static void main(String[] args)
  {
    Valuta val = new Valuta();
    val.omrekenenNaarDollar('f', 100);
  }
}
