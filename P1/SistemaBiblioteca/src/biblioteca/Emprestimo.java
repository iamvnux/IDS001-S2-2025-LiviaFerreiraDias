/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package biblioteca;

/**
 *
 * @author livia
 */

public class Emprestimo {
    private Pessoa pessoa;
    private Livro livro;

    public Emprestimo(Pessoa pessoa, Livro livro) {
        this.pessoa = pessoa;
        this.livro = livro;
    }

    public void realizarEmprestimo() {
        if (livro.isDisponivel()) {
            livro.setDisponivel(false);
            System.out.println(pessoa.getNome() + " realizou empréstimo do livro: " + livro.getTitulo());
        } else {
            System.out.println("Livro já está emprestado!");
        }
    }

    public void devolverLivro() {
        livro.setDisponivel(true);
        System.out.println(pessoa.getNome() + " devolveu o livro: " + livro.getTitulo());
    }
}

