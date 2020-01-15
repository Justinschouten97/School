/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.example;


import java.util.ArrayList;

public class ArrayListEx1 {

   
    public static void main(String[] args) {

        ArrayList<String> students;
        students = new ArrayList<>();

        students.add("Amy");
        students.add("Bob");
        students.add("Cindy");
        students.add("David");
        students.add(0,"Nick");
        students.add(1,"Mike");

        students.remove(3);

        System.out.println(students.size());

//        for (String student: students)
//        {
//            System.out.println(student);
//        }
    }
    
}
