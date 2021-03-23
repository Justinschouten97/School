package book._16_conversie.ex._02;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    short s = 20;
    int i = s; // geldig
    int i2 = 200;
    short s2 = i2; // ongeldig
    short s3 = (short) i2; // geldig
    System.out.println(s3);
  }
}
