package tools.h10.qz04;

import java.util.Arrays;

public class MijnArray {
    public static void main(String[] args) {

        char[] arrCharA = new char[4];
        arrCharA[0] = 'g';
        arrCharA[1] = 'h';
        arrCharA[2] = 'e';
        arrCharA[3] = 'f';

        char[] arrCharB = Arrays.copyOf(arrCharA,arrCharA.length);
        Arrays.sort(arrCharA);

        System.out.println(arrCharA[2]);
        System.out.println(arrCharB[3]);

        int[] arrayInt = new int[10];
        arrayInt[3] = 1;
        arrayInt[4] = 1;
        arrayInt[2] = 1;
        arrayInt[7] = 1;
        arrayInt[9] = 1;

        for (int i = 0; i < arrayInt.length; i++) {
            System.out.println(arrayInt[i]);

        }
    }
}
