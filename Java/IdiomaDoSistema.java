import java.util.Locale;

public class IdiomaDoSistema {
    public static void main(String[] args){
        Locale idioma = Locale.getDefault();
        // System.out.print(idioma); //retorna 'pt_BR' 
        // System.out.print(idioma.getLanguage()); //retorna 'pt' 
        System.out.print(idioma.getDisplayLanguage()); // retorna 'português'
    }
}
