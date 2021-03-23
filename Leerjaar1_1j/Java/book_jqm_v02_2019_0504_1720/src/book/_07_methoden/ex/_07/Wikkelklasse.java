package book._07_methoden.ex._07;

public class Wikkelklasse
{
  public static void main(String[] args)
  {
    int i = 23;
    // een int-variabele converteren naar een object
    Integer intObject = new Integer(i);
    // een object converteren naar een int-variabele
    int intType = intObject.intValue();
  }
}
