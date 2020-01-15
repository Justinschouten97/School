package com.example;

public class ShoppingCart {

    public static void main(String[] args)
    {
        Calculator calc = new Calculator();
        int addResult = calc.add(43, 79);
        System.out.println("Add Result: " + addResult);

        double divResult;
        //System.out.println("Division Result: " + divResult);
        // Division word opgevangen in de try hieronder

        try
        {
            divResult = calc.divide(15, 0);

        }

        catch (ArithmeticException e)
        {
            System.out.println("Niet delen door 0");
        }

        System.out.println("Yes ik geef toch resultaat tijdens een error" +
                "\n maar los de error wel ff op");
    }
}
