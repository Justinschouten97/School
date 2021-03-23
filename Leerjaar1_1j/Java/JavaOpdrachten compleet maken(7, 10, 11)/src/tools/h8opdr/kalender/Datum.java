package tools.h8opdr.kalender;

    public class Datum extends Object{

        private int dag;
        private int maand;
        private int jaar;

        public Datum(int dag, int maand, int jaar) {
            this.dag = dag;
            this.maand = maand;
            this.jaar = jaar;
        }

        public String datumFormaat() {
            String resultaat = this.dag + "-" + this.maand + "-" + this.jaar;


            return resultaat;
        }

        @Override
        public String toString(){
            String resultaat = this.dag + "-" + this.maand + "-" + this.jaar;


            return resultaat;
        }

    }

