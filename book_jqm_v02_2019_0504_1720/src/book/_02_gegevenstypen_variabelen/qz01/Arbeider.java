package book._02_gegevenstypen_variabelen.qz01;

public class Arbeider 
{  
  boolean isGetrouwd;  
  int leeftijd = 29;  
  long bankrekening = 6552;  
  double loon = 110.30;  
  char geslacht = 'm'; // vrouw: v, man: m
  
  public static void main(String[] args)  
  {    
    Arbeider arb = new Arbeider();    
    System.out.print(arb.leeftijd + ", ");    
    System.out.print(arb.bankrekening + ", ");
    System.out.print(arb.loon + ", ");    
    System.out.print(arb.isGetrouwd + ", ");    
    System.out.print(arb.geslacht);                   
  } 
} 