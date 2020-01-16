package sample;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Group;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import javafx.scene.control.*;

import javafx.scene.paint.Color;
import javafx.scene.shape.Rectangle;



public class Main extends Application
{

    @Override
    public void start(Stage primaryStage) throws Exception
    {
        // Rectagles //
        // Rectangle 1 == rect
        Rectangle rect = new Rectangle(20,20,100,200);
        rect.setFill(Color.GREEN);
        rect.setStroke(Color.BLACK);
        rect.setStrokeWidth(5.0);




        // Groepen //
        // Groep 1
        Group g1 = new Group();

        // Objecten in de groep (om de positie aan te passen (Niet in een HBox plaatsen!))
        g1.getChildren().add(rect);

        // HBoxen //
        // HBox 1
        HBox root = new HBox();

        // voegd de HBox g1 toe (Groep 1)
        g1.getChildren().add(root);
        // Objecten in de root


        // Eerste pagina
//        Scene scene1 = new Scene(g1, 300, 275, Color.rgb(255,0,0,0.2));
        Scene scene1 = new Scene(g1, 300, 275, Color.rgb(0,0,255,0.8));


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
