package com.example;

import javax.swing.*;

public class omrekenenHoek {
    public static void main(String[] args) {

        String stringValue = JOptionPane.showInputDialog("vul hoek in");
        int Value = Integer.parseInt(stringValue);

        int omrekenenhk = ((Value/Value)*Value) *Value;


        String output = "your value is " + omrekenenhk;
        JOptionPane.showMessageDialog(null, output);
    }
}
