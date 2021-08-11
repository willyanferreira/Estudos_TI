// import java.util.Stack;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.Scene;
// import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
// import jdk.jfr.StackTrace;

public class TelaJavaFX extends Application{
    public static void main(String[] args) throws Exception{
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) throws Exception {
        // TODO Auto-generated method stub
        primaryStage.setTitle("Estudando JavaFX");
        Button btn = new Button("Clique aqui");
        btn.setOnAction(new EventHandler<ActionEvent>(){

            @Override
            public void handle(ActionEvent event) {
                // TODO Auto-generated method stub
                System.out.println("Clicou no botão");                
            }
        });
        StackPane root =  new StackPane();
        root.getChildren().addAll(btn);
        primaryStage.setScene(new Scene(root, 400, 300));
        primaryStage.show();
        
    }
}