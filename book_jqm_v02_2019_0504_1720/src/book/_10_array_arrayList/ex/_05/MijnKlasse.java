package book._10_array_arrayList.ex._05;

import java.util.Arrays;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    // tweede methode
    String[] namenArray = { "Nora", "Sam", "Anna", "Lisa", "Julian" };
    System.out.println("De namen zijn niet gesorteerd.");
    for (int i = 0; i < namenArray.length; i++)
    {
      System.out.print(namenArray[i] + ", ");
    }
    // De sort-methode sorteert de namen
    Arrays.sort(namenArray);
    System.out.println("\n---------");
    System.out.println("De namen zijn gesorteerd.");
    for (int i = 0; i < namenArray.length; i++)
    {
      System.out.print(namenArray[i] + ", ");
    }
  }
}
