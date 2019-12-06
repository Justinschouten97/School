package tools.h7.qz02;

public class Bereken {

    int a = 20;
    int b = 122;

    public int test() {
        return a * b;
    }

    public static void main(String[] args) {
        Bereken mk = new Bereken();
        System.out.println(mk.test());
    }
}
