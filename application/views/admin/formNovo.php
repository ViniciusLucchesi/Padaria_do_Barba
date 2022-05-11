<link rel="stylesheet" href="<?php echo base_url(); ?>/public/formAlterar.css">

<div class="container">
    <div class="card">
        <div class="imgBx">
            <img src="https://kinsta.com/pt/wp-content/uploads/sites/3/2019/06/adicionar-legenda-imagem-wordpress-1024x512.png">
        </div>
        <div class="content">
            <div class="contentBx">
                <!-- Criando o formulário -->
                <form method="post" action="/padaria/salvarNovo">
                    <label>
                        <span>Produto</span>
                        <input type="text" class="produto" name="produto" value="" required>
                    </label>
                    <label>
                        <span>Perecível</span>
                        <input type="text" class="perecivel" name="perecivel" value="" required>
                    </label>
                    <label>
                        <span>Valor</span>
                        <input type="text" class="valor" name="valor" value="" required>
                    </label>
                    <label>
                        <span>Tipo</span>
                        <input type="text" class="tipo" name="tipo" value="" required>
                    </label>
                    <label>
                        <span>Link da Imagem</span>
                        <input type="text" class="imagem" name="imagem" value="" required>
                    </label>
                    <input type="submit" value="Salvar">
                    <a href="/admin">voltar</a>
                </form>
            </div>
        </div>
    </div>
</div>