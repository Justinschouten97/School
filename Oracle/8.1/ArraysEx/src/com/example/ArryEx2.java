/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.example;

public class ArryEx2 {
    
    public static void main(String args[]) {

        int teller = 0;

        String[] browsers = new String[4];
        browsers[0] = "explorer";
        browsers[1] = "chrome";
        browsers[2] = "opera";
        browsers[3] = "firefox";
        System.out.print("size of array" + browsers.length);

        for (String browser: browsers)
        {
            System.out.println("Browser " + teller + ": "+ browser);
            teller ++;
        }
    }
    
}
