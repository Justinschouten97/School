package com.example;

import javax.swing.*;
import java.text.DecimalFormat;
import java.util.Scanner;

public class Test { // bmi


    public static void main(String[] a) {
        DecimalFormat digit = new DecimalFormat("0.00");
        String value = JOptionPane.showInputDialog(null, "Enter value ");
        float log;
        log = Float.parseFloat(value);
        JFrame frame = new JFrame();
        Object stringArray[] = {"Celsius to Fahrenheit", "Fahrenheit to Celsius"};
        int reply = JOptionPane.showOptionDialog(frame, "Choose conversion type of value: " + digit.format(log), "MiniConverter",
                JOptionPane.YES_NO_OPTION, JOptionPane.QUESTION_MESSAGE, null, stringArray,
                stringArray[0]);
        if (reply == JOptionPane.YES_OPTION) {
            DecimalFormat digit2 = new DecimalFormat("0.00");
            double conversion = log * 1.8 + 32;
            JOptionPane.showMessageDialog(frame, log + " " + "(°C) equals " + digit2.format(conversion) + " (°F)", "MiniConverter", JOptionPane.INFORMATION_MESSAGE);
            System.exit(0);
        } else {
            DecimalFormat digit3 = new DecimalFormat("0.00");
            double conversion = (log - 32) / 1.8;
            JOptionPane.showMessageDialog(frame, log + " " + "(°F) equals " + digit3.format(conversion) + " (°C)", "MiniConverter", JOptionPane.INFORMATION_MESSAGE);
            System.exit(0);
        }
    }
}
