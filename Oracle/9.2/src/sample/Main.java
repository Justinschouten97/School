package sample;

import javafx.application.Application;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.layout.HBox;
import javafx.scene.paint.CycleMethod;
import javafx.scene.paint.LinearGradient;
import javafx.scene.paint.Stop;
import javafx.scene.shape.Polygon;
import javafx.stage.Stage;
import javafx.scene.paint.Color;

import java.awt.*;


public class Main extends Application
{
    @Override
    public void start(Stage primaryStage) throws Exception
    {
        // Polygon //
        Polygon polygon1 = new Polygon(new double[]{
                80 , 10 ,
                10 , 80 ,
                80 , 80 ,
        });
//        Stop[] stops = new Stop[] { new Stop(0, Color.BLACK), new Stop(1, Color.BLUE)};
//        LinearGradient lg1 = new LinearGradient(0, 0, 1, 0, true,
//                CycleMethod.NO_CYCLE, stops);

        LinearGradient gradient1 = new LinearGradient(0,0,1,0,true,
                CycleMethod.NO_CYCLE, new Stop[] {
            new Stop(1, Color.DODGERBLUE),
            new Stop(0, Color.BLACK)

        });

        // Groepen //
        // Groep 1
        Group g1 = new Group();

        // Objecten in de groep (om de positie aan te passen (Niet in een HBox plaatsen!))
//        g1.getChildren().add(rect);
        g1.getChildren().add(polygon1);
        g1.setLayoutX(20);
        g1.setLayoutY(20);

//        polygon1.setFill(Color.web("#0f65ee"));
        polygon1.setFill(gradient1);

        // HBoxen //
        // HBox 1
        HBox root = new HBox();

        // voegd de HBox g1 toe (Groep 1)
        g1.getChildren().add(root);
        // Objecten in de root


        // Eerste pagina
//        Scene scene1 = new Scene(g1, 300, 275, Color.rgb(255,0,0,0.2));
        Scene scene1 = new Scene(g1, 300, 275, Color.rgb(0,0,0,1.0));


        primaryStage.setTitle("Hello World");
        // Eerste pagina uitkiezen in dit geval *scene1* (pagina 1)
        primaryStage.setScene(scene1);
        primaryStage.show();
    }


    public static void main(String[] args)
    {
        launch(args);
    }
}
