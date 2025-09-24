/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package biblioteca;

/**
 *
 * @author livia
 */

public class Biblioteca {
    private String nome;

    public Biblioteca(String nome) {
        this.nome = nome;
    }

    public void buscarLivro(String titulo) {
        System.out.println("Buscando livro pelo título: " + titulo);
    }

    public void buscarLivro(String titulo, String autor) {
        System.out.println("Buscando livro pelo título: " + titulo + " e autor: " + autor);
    }
}

