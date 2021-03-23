package book._10_array_arrayList.ex._06;

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
    System.out.println("Het aantal tekens van de namen.");
    for (int i = 0; i < namenArray.length; i++)
    {
      System.out.print(namenArray[i].length() + ",");
    }
  }
}