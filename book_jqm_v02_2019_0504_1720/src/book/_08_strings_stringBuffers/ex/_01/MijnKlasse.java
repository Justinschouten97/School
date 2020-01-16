package book._08_strings_stringBuffers.ex._01;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    String tekst = "Als je doet wat je leuk vindt, hoef je nooit te werken.";
    String tekst2 = "Julia";
    String tekst3 = "Julia";
    String tekst4 = "julia";
    String tekst5 = "Java #is een #populaire program#meertaal.";
    System.out.println("--------------------------------------");
    System.out.println("Aantal tekens: " + tekst.length());
    System.out.println("Hoofdletters: " + tekst.toUpperCase());
    System.out.println("Kleine letters: " + tekst.toLowerCase());
    System.out.println("Kleine letters: " + tekst.substring(12, 28));
    // De index begint met 0
    System.out.println("Het zevende teken: " + tekst.charAt(7));
    System.out.println("--------------------------------------");
    System.out.println("is tekst2 = tekst3: " + tekst2.equals(tekst3));
    // Hoofdlettergevoelig
    System.out.println("is tekst3 = tekst4: " + tekst3.equals(tekst4));
    System.out.println("--------------------------------------");
    System.out.println("Verwijder de hekjes: " + tekst5.replace("#", ""));
  }
}
