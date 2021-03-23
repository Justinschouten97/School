/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.example;

public class ArrayEx1 {

    public static void main(String args[]) {
        
        long[] primeNum = new long[20];
        long[] even = new long[5];

        long[] primes = new long[10];
        System.out.println(primes[0]);


        long[] primes2 = primes;
        primes2[0] = 5;
        System.out.println(primes2[0]);
        System.out.println(primes2.length);


    }

}
