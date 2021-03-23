/*
 @author Justin Schouten
 (Veel functies toegevoegd)
 */

package sample;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.*;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.TilePane;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.stage.Stage;

import javafx.scene.control.TextField;


import javafx.scene.shape.Rectangle;

public class JavaFXTest extends Application {

        @Override
        public void start (Stage primaryStage)
        {
            Button btn1 = new Button();
            btn1.setText("Klik hier 1");
            btn1.setOnAction(new EventHandler<ActionEvent>() {
                @Override
                public void handle(ActionEvent event) {
                    System.out.println("Je hebt geklikt op button 1");
                }
            });

                Button btn2 = new Button();
                btn2.setText("Klik hier 2");
            btn2.setOnAction(new EventHandler<ActionEvent>() {
                    @Override
                    public void handle(ActionEvent event) {
                        System.out.println("Je hebt geklikt op button 2");
                    }
                });
            Button btn3 = new Button();
            btn3.setText("Klik hier 3");
            btn3.setOnAction(new EventHandler<ActionEvent>() {
                @Override
                public void handle(ActionEvent event) {
                    System.out.println("Je hebt geklikt op button 3");
                }
            });
            Button btn4 = new Button();
            btn4.setText("Klik hier 4");
            btn4.setOnAction(new EventHandler<ActionEvent>() {
                @Override
                public void handle(ActionEvent event) {
                    System.out.println("Je hebt geklikt op button 4");
                }
            });

            TextField t1 = new TextField();

            Rectangle rt1 = new Rectangle();

            rt1.setWidth(50.0d);
            rt1.setHeight(50.0d);
//            rt1.setX(1);
//            rt1.setY(1);


            ScrollBar sb1 = new ScrollBar();
            ScrollBar sb2 = new ScrollBar();

            PieChart pc1 = new PieChart();

            TextField text = new TextField("Text");
            text.setMaxSize(140, 20);

            ChoiceBox cb = new ChoiceBox();
            cb.getItems().addAll("Ja", "Nee", "Misschien");
            cb.getSelectionModel().selectFirst();

            ToolBar toolbar = new ToolBar();
            toolbar.getItems().add(new Button("Home"));
            toolbar.getItems().add(new Button("Options"));
            toolbar.getItems().add(new Button("Help"));


//            BorderPane borderPane = new BorderPane();

            // Group 1
            Group po = new Group();

            // Bodem Content //
            HBox root = new HBox();
            root.getChildren().add(btn3);
            root.getChildren().add(btn4);
            //plaatst de Hbox onderaan het scherm
            root.setLayoutY(210);

            //HBox in de Groep (po) plaatsen
            po.getChildren().add(root);


            // Top Content //
            VBox topVbox = new VBox();
            topVbox.getChildren().add(toolbar);
            topVbox.setLayoutX(0);
            topVbox.setLayoutY(45);
            //Toolbar in de Groep (po) plaatsen
            po.getChildren().add(toolbar);

            // Left Content //
            VBox leftVBox = new VBox();
            leftVBox.setLayoutY(50);
            leftVBox.getChildren().add(btn1);
            leftVBox.getChildren().add(btn2);
            leftVBox.getChildren().add(t1);
//            leftVBox.getChildren().add(rt1); // rectangle geeft hij niet weer
            leftVBox.getChildren().add(text);
            leftVBox.getChildren().add(cb);
            leftVBox.getChildren().add(sb1);
//            leftVBox.getChildren().add(pc1);  // piechart geeft hij niet weer
            root.getChildren().add(leftVBox);

            //VBox in de Groep (po) plaatsen
            po.getChildren().add(leftVBox);



        Scene scene = new Scene(po, 300, 250, Color.SADDLEBROWN);

        primaryStage.setTitle("Hello Buttons!");
        primaryStage.setScene(scene);
        primaryStage.show();

    }

    public static void main(String[] args) {
        launch(args);
    }
}