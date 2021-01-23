<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/texto_central.css">
        <title>Mapler - Compilador Portugol</title>
    </head>

    <body class="bg-dark">
        <header></header>

        <main>
            <div class="container masthead-followup p-5 px-4 px-md-3">
                <section class="mt-5 pt-3">
                    <div class="row align-items-lg-center">
                        <div class="col">
                            <h1 class="centralizar-sm">Mapler - Compilador Portugol</h1>
                            <p class="lead mb-4 centralizar-sm">
                                Este projeto visa o desenvolvimento e produção de uma ferramenta de compilação da <code>pseudo-linguagem</code> português estruturado (<strong>portugol</strong>) para auxliar estudantes brasileiros iniciando em atividades de programação.
                            </p>

                            <a class="text-decoration-none m-0 p-0 centralizar-sm" href="" >
                                <button type="button" class="btn btn-lg btn-light px-5 mb-3 me-md-3" id="btn-download" disable >Indisponivel</button>
                            </a>
                            <label class="px-2 sumir-sm" style="color: #d63384; font-size: 100%;">v?.?</label>
                        </div>
    
                        <div class="col sumir-sm">
                            <img src="<?php echo base_url(); ?>images/imagem-banner-inicio.png" alt="" style="width: 400px;">
                        </div>
                    </div>
    
                    <div class="mt-5">
                        <p class="lead centralizar-sm">
                            O Projeto pretende possibilitar a geração de códigos em <code>Pascal</code>, <code>C</code>, <code>C++</code>, <code>Python</code> e <code>Java</code> a partir do código elaborado pelos alunos em <code>Portugol</code> com o objetivo de facilitar o aprendizado nestas novas linguagens, que provavelmente serão as próximas linguagens a serem aprendidas nos cursos na área de <strong>Computação e Programação</strong>.
                        </p>
                    </div>
                </section>

                <section class="mt-5 pt-3 lead">
                    <h2 class="centralizar-sm">Exemplo de Código</h2>
                    <pre style="background-color: #292a2c;">
                        
    <span class="palavra-reservada comando">variaveis</span>
        senha:<span class="palavra-reservada comando"> cadeia</span>;
        senha_correta: <span class="palavra-reservada comando">cadeia</span>;
    <span class="palavra-reservada comando">inicio</span>
        <span class="palavra-reservada comando">escrever</span> <span class="string">'Digite a senha?'</span>;
        <span class="palavra-reservada comando">ler</span> senha;
        senha_correta <- <span class="string">'12345'</span>;

        <span class="palavra-reservada comando">se</span> senha = senha_correta <span class="palavra-reservada comando">entao</span>
            <span class="palavra-reservada comando">escrever</span> <span class="string">'Voce digitou a senha CORRETA!'</span>;
        <span class="palavra-reservada comando">senao</span>
            <span class="palavra-reservada comando">escrever</span> <span class="string">'Voce digitou a senha ERRADA!'</span>;
        <span class="palavra-reservada comando">fim se</span>;
    <span class="palavra-reservada comando">fim.</span>
                    </pre>
                </section>
            </div>
        </main>

        <footer></footer>
    </body>
</html>