package book._14_abstracte_klassen.qz01;

public abstract class MijnAbstract
{
  protected int x = 6;
  public MijnAbstract()
  {
    x += 2;
  }
  abstract int bereken(int x);
}
