package book._10_array_arrayList.ex._04;

import java.util.Arrays;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    String[] namenArray = new String[5];
    namenArray[0] = "Nora";
    namenArray[1] = "Sam";
    namenArray[2] = "Anna";
    namenArray[3] = "Lisa";
    namenArray[4] = "Julian";
    System.out.println("De namen zijn niet gesorteerd.");
    for (int i = 0; i < namenArray.length; i++)
    {
      System.out.print(namenArray[i] + ", ");
    }
    // De sort methode sorteert de namen
    Arrays.sort(namenArray);
    System.out.println("\n---------");
    System.out.println("De namen zijn gesorteerd.");
    for (int i = 0; i < namenArray.length; i++)
    {
      System.out.print(namenArray[i] + ", ");
    }
  }
}
