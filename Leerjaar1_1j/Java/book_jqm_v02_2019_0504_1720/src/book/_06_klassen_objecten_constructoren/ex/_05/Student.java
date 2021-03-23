package book._06_klassen_objecten_constructoren.ex._05;

public class Student
{
  String naam;
  int leeftijd;
  // Een constructor met twee argumenten
  public Student(String naam, int leeftijd)
  {
    this.naam = naam;
    this.leeftijd = leeftijd;
  }
  public static void main(String[] args)
  {
    Student st = new Student("Jan", 31);
    System.out.println("Naam:     " + st.naam);
    System.out.println("Leeftijd: " + st.leeftijd);
  }
}
