package book._18_excepties.ex._03;

public class MijnKlasse
{
  public static void main(String[] args)
  {
    try
    {
      // Een code die een exceptie kan opleveren.
    }
    catch (ArrayIndexOutOfBoundsException ae)
    {
      // Vang ArrayIndexOutOfBoundsException op.
    }
    catch (IndexOutOfBoundsException ae)
    {
      // Vang IndexOutOfBoundsException op.
    }
    catch (Exception e)
    {
      // Vang alle andere mogelijke excepties op.
    }
  }
}
