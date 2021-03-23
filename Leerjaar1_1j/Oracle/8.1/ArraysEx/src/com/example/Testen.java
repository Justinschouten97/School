package com.example;

public class Testen {
    public static void main(String[] args) {

        int[] ages = new int[3];
        ages[0] = 19;
        ages[1] = 42;
        ages[2] = 92;

        for (int age: ages)
        {
            System.out.println("leeftijd is: " + age);
        }
//
//        for (int idxa = 0; idxa < ages.length; idxa++) {
//            System.out.println(ages[idxa]);
//
//        }

        String[] names = new String[3];
        names[0] = "Marry";
        names[1] = "Bob";
        names[2] = "Carlos";

//        for (int idx = 0; idx < names.length ; idx++) {
//
//            System.out.println(names[idx]);
//        }

        String[] names2 = {"Marry", "Bob", "Carlos"};
        names2[0] = "Gary";
        names2[1] = "Rob";
//
//        for (int idxn = 0; idxn < names2.length; idxn++) {
//            System.out.println(names2[idxn]);
//
//        }

        int[] ages2 = {25, 27, 28};

//        for (String name: names2)
//        {
//            System.out.println(name);
//        }
    }
}
