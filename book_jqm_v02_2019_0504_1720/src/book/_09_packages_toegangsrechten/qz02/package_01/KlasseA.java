package book._09_packages_toegangsrechten.qz02.package_01;

import book._09_packages_toegangsrechten.qz02.package_02.KlasseB;

public class KlasseA
{
  public static void main(String[] args)
  {
    KlasseB kb = new KlasseB();
    // System.out.print(kb.w); /* 1 */
    // System.out.print(kb.x); /* 2 */
    // System.out.print(kb.y); /* 3 */
    // System.out.print(kb.z); /* 4 */
  }
}
