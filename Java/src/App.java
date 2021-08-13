// package NewTelaJavaFX.src;

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

public class App extends Application{
    public static void main(String[] args) throws Exception{
        launch(args);
    }

    @Override
    public void start(Stage aprendendo) throws Exception {
        // TODO Auto-generated method stub
        aprendendo.setTitle("Estudando JavaFX");
        Button btn = new Button("Clique aqui");
        // var textoSimples = "Hora de ir me arrumar!";
        btn.setOnAction(new EventHandler<ActionEvent>(){

            @Override
            public void handle(ActionEvent event) {
                // TODO Auto-generated method stub
                System.out.println("Quase hora de me arrumar para o trabalho");                
            }
        });
        StackPane root =  new StackPane();
        root.getChildren().addAll(btn);
        aprendendo.setScene(new Scene(root, 500, 400));
        aprendendo.show();
        
    }
}
