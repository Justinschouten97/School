package sample;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;


public class JavaFXTest2 extends Application
{
    Button bt1;
    Button btn2;

    public static void main(String[] args)
    {
        launch(args);
    }


    @Override
    public void start(Stage primaryStage) throws Exception
    {
        primaryStage.setTitle("Buttons Testen");
        Button btn1 = new Button();
        btn1.setText("Button 1");

        Button btn2 = new Button();
        btn2.setText("Button 2");

        // THis class will handle the button events
        btn1.setOnAction(e -> System.out.println("Je hebt geklikt op button 1"));
        btn2.setOnAction(e -> System.out.println("Je hebt geklikt op button 2"));


        StackPane layout = new StackPane();
        layout.getChildren().add(btn1);
        Scene scene1 = new Scene(layout, 300, 250);
        primaryStage.setScene(scene1);
        primaryStage.show();
    }
}


