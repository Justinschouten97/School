package book._11_statische_leden.ex._01;

public class Student
{
  String naam;
  static int aantalStudenten;
  public Student()
  {
    aantalStudenten++;
  }
  public static void main(String[] args)
  {
    Student st1 = new Student();
    Student st2 = new Student();
    Student st3 = new Student();
    st1.naam = "Hans";
    st2.naam = "Erica";
    st3.naam = "Emma";
    System.out.println("Naam st1: " + st1.naam);
    System.out.println("Aantal studenten: " + st1.aantalStudenten);
    System.out.println("Naam st2: " + st2.naam);
    System.out.println("Aantal studenten: " + st2.aantalStudenten);
    System.out.println("Naam st3: " + st3.naam);
    System.out.println("Aantal studenten: " + st3.aantalStudenten);
    /* de klassenvariabelen kun je ook aanroepen
     * met de naam van de klasse als volgt
     */
    System.out.println("Aantal studenten: " + Student.aantalStudenten);
  }
}
