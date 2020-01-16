package book._17_geneste_klassen.ex._01;

public class Gezicht
{
  private String gezichtsvorm = "Rond";
  private String huidkleur = "Getint";
  public void printInfo()
  {
    System.out.println("Gezichtsvorm:   " + gezichtsvorm);
    System.out.println("Huidkleur:      " + huidkleur);
  }
  class Oog
  {
    String kleur = "Bruin";
    String linkersterkte = "- 2";
    String rechtersterkte = "-1.5";
    public void printInfo()
    {
      System.out.println("Oogkleur:       " + kleur);
      System.out.println("Linkersterkte:  " + linkersterkte);
      System.out.println("Rechtersterkte: " + rechtersterkte);
    }
  }
  public static void main(String[] args)
  {
    Gezicht gezicht = new Gezicht();
    Oog oog = gezicht.new Oog();
    gezicht.printInfo();
    oog.printInfo();
  }
}
