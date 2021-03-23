package book._06_klassen_objecten_constructoren.ex._03;

public class Student
{
  String naam;
  char geslacht = 'm'; // m: man, v: vrouw
  int leeftijd;
  
  public static void main(String[] args)
  {
    Student st = new Student();
    st.naam = "Jan";
    st.leeftijd = 22;
    System.out.println("Naam:     " + st.naam);
    System.out.println("Geslacht: " + st.geslacht);
    System.out.println("Leeftijd: " + st.leeftijd);
  }
}
