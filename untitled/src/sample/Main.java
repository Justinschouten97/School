package sample;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TitledPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

/**
 *
 * @author JScho
 */
public class Main extends Application {

    @Override
    public void start(Stage primaryStage) {
        Button btn1 = new Button();
        Button btn2 = new Button();
        Button btn3 = new Button();
        Button btn4 = new Button();

        btn1.setText("Say Hello World!");
        btn1.setLayoutY(50);
        btn1.setLayoutX(100);

        btn2.setText("2222");
        btn2.setLayoutY(100);
        btn2.setLayoutX(100);

        btn2.setText("3");
        btn2.setLayoutY(150);
        btn2.setLayoutX(100);

        btn2.setText("4");
        btn2.setLayoutY(200);
        btn2.setLayoutX(100);
        btn1.setOnAction(new EventHandler<ActionEvent>() {

            @Override
            public void handle(ActionEvent event) {
                System.out.println("Oke bijf maar klikken!");
            }
        });

        Group root = new Group();
        root.getChildren().add(btn1);
        root.getChildren().add(btn2);
        root.getChildren().add(btn3);
        root.getChildren().add(btn4);

//        HBox root2 = new HBox();
//        root2.getChildren().add(btn3);
//        root2.getChildren().add(btn4);


        Scene scene = new Scene(root, 400, 300);

        primaryStage.setTitle("Buttons Test");
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }

}

