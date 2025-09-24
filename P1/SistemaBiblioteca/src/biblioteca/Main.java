/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package biblioteca;

/**
 *
 * @author livia
 */

public class Main {
    public static void main(String[] args) {
        Aluno aluno1 = new Aluno("João Silva", "12345678900", "A123");
        Professor prof1 = new Professor("Maria Oliveira", "98765432100", "Computação");

        aluno1.exibirDados();
        prof1.exibirDados();

        Livro livro1 = new Livro("Programação em Java", "Deitel");
        Livro livro2 = new Livro("Algoritmos", "Cormen");

        livro1.exibirInfo();
        livro2.exibirInfo();

        Biblioteca biblioteca = new Biblioteca("Biblioteca Central");
        biblioteca.buscarLivro("Programação em Java");
        biblioteca.buscarLivro("Algoritmos", "Cormen");

        Emprestimo emp1 = new Emprestimo(aluno1, livro1);
        emp1.realizarEmprestimo();
        emp1.realizarEmprestimo();

        emp1.devolverLivro();
        livro1.exibirInfo();
    }
}

