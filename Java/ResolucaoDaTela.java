import java.awt.Dimension;
import java.awt.Toolkit;

// import javax.swing.plaf.DimensionUIResource;
public class ResolucaoDaTela {
    public static void main(String[] args){
        Dimension notebook = Toolkit.getDefaultToolkit().getScreenSize();
        int largura = notebook.width; // dessa forma tbm dá certo
        // var largura = (int) notebook.getWidth();
        int altura = notebook.height; // dessa forma tbm dá certo
        // var altura = (int) notebook.getHeight();
        var tela = "A resolução da tela do meu notebook é " + largura + " de largura e " + altura + " de altura"; 
        System.out.print(tela);
    }
}
