package tools.h8opdr.gegevens;
import tools.h8opdr.kalender.Datum;
public class Student {


        String naam;
        Datum geboortedatum;

        public Student(String naam, Datum geboortedatum)
        {
            //  this(naam, 28-8-1998)
            this.naam = naam;
            this.geboortedatum = geboortedatum;
        }

        public static void main(String[] args) {
            //       Datum gebeboortedatum= new Datum(1,1,1)
            tools.h8opdr.gegevens.Student st1 = new tools.h8opdr.gegevens.Student("Emma", new Datum(28,8,1998));
            tools.h8opdr.gegevens.Student st2 = new tools.h8opdr.gegevens.Student("David", new Datum(13,9,1996) );

            System.out.println("---Eerste Student---");
            System.out.println("Naam: " + st1.naam);
            System.out.println("Geboortedatum: " + st1.geboortedatum.datumFormaat());

            System.out.println("");

            System.out.println("---Tweede Student---");
            System.out.println("Naam: " + st2.naam);
            System.out.println("Geboortedatum: " + st2.geboortedatum);
        }
    }

