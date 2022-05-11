<link rel="stylesheet" href="<?php echo base_url(); ?>public/formAlterar.css">

<div class="container">
    <div class="card">
        <div class="imgBx">
            <img src="<?php echo $data->imagem ?>">
        </div>
        <div class="content">
            <div class="contentBx">
                <!-- Criando o formulário -->
                <form method="post" action="/padaria/salvarAlteracao">
                    <input type="hidden" class="id" name="id" value="<?php echo $data->id ?>">
                    <label>
                        <span>Produto</span>
                        <input type="text" class="produto" name="produto" value="<?php echo $data->produto ?>" required>
                    </label>
                    <label>
                        <span>Perecível</span>
                        <input type="text" class="perecivel" name="perecivel" value="<?php echo $data->perecivel ?>" required>
                    </label>
                    <label>
                        <span>Valor</span>
                        <input type="text" class="valor" name="valor" value="<?php echo $data->valor ?>" required>
                    </label>
                    <label>
                        <span>Tipo</span>
                        <input type="text" class="tipo" name="tipo" value="<?php echo $data->tipo ?>" required>
                    </label>
                    <label>
                        <span>Link da Imagem</span>
                        <input type="text" class="imagem" name="imagem" value="<?php echo $data->imagem ?>" required>
                    </label>
                    <input type="submit" value="Salvar">
                    <a href="/admin">voltar</a>
                </form>
            </div>
        </div>
    </div>
</div>