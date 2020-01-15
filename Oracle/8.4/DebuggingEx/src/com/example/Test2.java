package com.example;

public class Test2 {
    public static void main(String[] args) {

        int nStart = 10;

        int n = 10;
        int sum = 10;

        while (n >= 1)
        {
            sum = sum + n;
            n--;
//            System.out.println(sum);
//            System.out.println(n);
        }
        sum = sum - nStart;
        System.out.println("The sum of the integers 1 to 10 is " + sum);
    }
}
