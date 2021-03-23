package com.example;

import java.util.ArrayList;

public class Testen {
    public static void main(String[] args) {

        ArrayList<String> names;
        names = new ArrayList<>();

        names.add("Jamie");
        names.add("Gustav");
        names.add("Alisa");
        names.add("Jose");
        names.add(2, "Prashant");

        String str = names.get(0);
        System.out.println(str);
        names.remove(0);
        names.remove(names.size() - 1);
        names.remove("Gustav");

        System.out.println(names);

    }
}
