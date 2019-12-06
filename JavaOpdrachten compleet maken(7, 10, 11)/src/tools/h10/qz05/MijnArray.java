package tools.h10.qz05;

import java.util.Arrays;

public class MijnArray {

    public static void main(String[] args) {

        char[] arrCharA = new char[4];
        arrCharA[0] = 'w';
        arrCharA[1] = 'k';
        arrCharA[2] = 'd';
        arrCharA[3] = 'r';

        char[] arrCharB = Arrays.copyOf(arrCharA, arrCharA.length);
        int i = Arrays.binarySearch(arrCharA, 'k');
        boolean b = Arrays.equals(arrCharA, arrCharB);
        System.out.println(i + " " + b + " ");

        char[] arrayChar = new char[12];
        arrayChar[4] = 'R';
        arrayChar[5] = 'N';
        arrayChar[6] = 'B';
        arrayChar[7] = 'S';
        arrayChar[8] = 'M';
        arrayChar[9] = 'O';
        arrayChar[10] = 'A';
        arrayChar[11] = 'C';

        boolean b2 = Arrays.equals(arrayChar, arrCharA);
        System.out.println(b2 + " ");
        Arrays.sort(arrayChar);

        System.out.println(arrayChar);
    }
}
