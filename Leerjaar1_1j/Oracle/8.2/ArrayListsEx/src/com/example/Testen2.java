package com.example;

import java.util.ArrayList;
import java.util.ListIterator;

public class Testen2 {
    public static void main(String[] args) {

        ArrayList<String> names;
        names = new ArrayList<>();

        names.add("Jamie");
        names.add("Gustav");
        names.add("Alisa");
        names.add("Jose");
        names.add(2, "Prashant");

        String str = names.get(0);
//        System.out.println(str);
        names.remove(0);
        names.remove(names.size() - 1);
        names.remove("Gustav");

//        System.out.println(names);

        // ** Iterator **
        ListIterator<String> litr = names.listIterator();
        System.out.println("Traversing list forwards: ");
        while (litr.hasNext())
        {
            System.out.println("Name is " + litr.next()) ;
        }
        System.out.println("Traversing list backwards: ");
        while (litr.hasPrevious())
        {
            System.out.println("Name is " + litr.previous());
        }
    }
}
