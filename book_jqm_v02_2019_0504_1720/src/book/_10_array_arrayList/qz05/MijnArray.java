package book._10_array_arrayList.qz05;

import java.util.Arrays;

public class MijnArray
{
  public static void main(String[] args)
  {
    char[] arrCharA = new char[4];
    arrCharA[0] = 'w';
    arrCharA[1] = 'k';
    arrCharA[2] = 'd';
    arrCharA[3] = 'r';
    char[] arrCharB = Arrays.copyOf(arrCharA, arrCharA.length);
    // de index van het element 'k'
    int i = Arrays.binarySearch(arrCharA, 'k');
    // controleert of de twee arrays gelijk zijn
    boolean b = Arrays.equals(arrCharA, arrCharB);
    System.out.print(i + " " + b);
  }
}
