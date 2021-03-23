/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.example;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.ListIterator;


public class ArrayListEx2 {
    public static void main(String args[]) {
        
        ArrayList<Integer> nums = new ArrayList();
        nums.add(1);
        nums.add(2);
        nums.add(3);
        nums.add(4);
        nums.add(5);
        nums.add(6);
        nums.add(7);
        nums.add(8);
        nums.add(9);
        nums.add(10);

        for (int i = 0; i < nums.size() ; i++)
        {
            if ((nums.get(i) % 2) != 0)
            {
                nums.remove(i);
            }
        }

        ListIterator<Integer> numsAll = nums.listIterator();
        while (numsAll.hasNext()) {
            System.out.println(numsAll.next());
        }

        System.out.println(" ");

        // andersom
        while (numsAll.hasPrevious()) {
            System.out.println(numsAll.previous());
        }
    }
}
