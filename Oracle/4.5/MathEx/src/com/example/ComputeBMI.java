/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.example;


import javax.swing.*;


public class ComputeBMI {
    public static void main(String[] args)
	{

		String weightstring = JOptionPane.showInputDialog("enter your weight:");
		Double weight =Double.parseDouble(weightstring);
		String heightstring = JOptionPane.showInputDialog("enter your height:");
		Double height =Double.parseDouble(heightstring);

		Double weightkg = weight;
		Double heightmetres= height;
		Double BMI = (weightkg /(heightmetres*heightmetres)) * 703;
		String output= "your BMI is "+BMI;
		JOptionPane.showMessageDialog(null,output);

//		Scanner sc = new Scanner(System.in);
//		System.out.print("Input weight in kilogram: ");
//		double weight = sc.nextDouble();
//		System.out.print("\nInput height in meters: ");
//		double height = sc.nextDouble();
//		double BMI = weight / (height * height);
//		System.out.print("\nThe Body Mass Index (BMI) is " + BMI + " kg/m2");
        }
}
