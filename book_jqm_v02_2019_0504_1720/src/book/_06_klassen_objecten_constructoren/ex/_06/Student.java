package book._06_klassen_objecten_constructoren.ex._06;

public class Student
{
  String naam;
  int leeftijd;
  // een-argument-constructor
  public Student(String naam)
  {
    // het aanroepen van de twee-argi constructor
    this(naam, 20);
  }
  // twee-argumenten-constructor
  public Student(String naam, int leeftijd)
  {
    this.naam = naam;
    this.leeftijd = leeftijd;
  }
  public static void main(String[] args)
  {
    Student st = new Student("Emma");
    System.out.println("Naam:     " + st.naam);
    System.out.println("Leeftijd: " + st.leeftijd);
  }
}
