package book._10_array_arrayList.qz04;

import java.util.Arrays;

public class MijnArray
{
  public static void main(String[] args)
  {
    char[] arrCharA = new char[4];
    arrCharA[0] = 'g';
    arrCharA[1] = 'h';
    arrCharA[2] = 'e';
    arrCharA[3] = 'f';
    // Zie de klasse "Arrays" van de Java standaard API
    char[] arrCharB = Arrays.copyOf(arrCharA, arrCharA.length);
    Arrays.sort(arrCharA);
    System.out.print(arrCharA[2]);
    System.out.print(arrCharB[3]);
  }
}
