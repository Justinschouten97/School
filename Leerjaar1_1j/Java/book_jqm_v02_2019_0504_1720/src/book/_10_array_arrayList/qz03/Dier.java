package book._10_array_arrayList.qz03;

import java.util.Arrays;

public class Dier
{
  public static void main(String[] args)
  {
    String[] arrDier = new String[5];
    arrDier[0] = "Wolf ";
    arrDier[1] = "Leeuw ";
    arrDier[2] = "Luipaard ";
    arrDier[3] = "Olifant ";
    arrDier[4] = "Tijger ";
    // Zie de klasse "Arrays" van de standaard Java API
    Arrays.sort(arrDier);
    for (int i = 0; i < arrDier.length; i++)
    {
      if (i > 1)
      {
        System.out.print(arrDier[i]);
      }
    }
  }
}
