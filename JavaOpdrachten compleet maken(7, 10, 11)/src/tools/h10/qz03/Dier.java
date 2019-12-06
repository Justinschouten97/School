package tools.h10.qz03;

import java.util.Arrays;

public class Dier {

    public static void main(String[] args) {
        String[] arrDier = new String[8];
        arrDier[0] = "Wolf";
        arrDier[1] = "Leeuw";
        arrDier[2] = "Luipaard";
        arrDier[3] = "Olifant";
        arrDier[4] = "Tijger";
        arrDier[5] = "Beer";
        arrDier[6] = "Zebra";
        arrDier[7] = "Aap";

        Arrays.sort(arrDier);
        for (int i = 0; i < arrDier.length; i ++)
        {
            if (i >= 0)
            {
                System.out.println(arrDier[i]);
            }
        }
    }
}