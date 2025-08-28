package exerciciometodos;

public class TestaFuncionario {
    public static void main(String[] args) {
        Funcionario f1 = new Funcionario("Ana", 2000);
        Funcionario f2 = new Funcionario("Bruno", 2500);

        System.out.println("Antes do aumento:");
        f1.mostrarDados();
        System.out.println("------");
        f2.mostrarDados();

        f1.aumentarSalario(10);
        f2.aumentarSalario(20);

        System.out.println("------ Apos aumento ------");
        f1.mostrarDados();
        System.out.println("------");
        f2.mostrarDados(); 
    }
}
