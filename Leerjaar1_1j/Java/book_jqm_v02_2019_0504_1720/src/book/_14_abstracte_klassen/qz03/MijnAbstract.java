package book._14_abstracte_klassen.qz03;

abstract class MijnAbstract
{
  String str = "N";
  MijnAbstract()
  {
    this("O");
    str += "L";
  }
  MijnAbstract(String str)
  {
    str += str;
  }
}
