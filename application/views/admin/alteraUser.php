<link rel="stylesheet" href="<?php echo base_url(); ?>public/formAlterar.css">

<!-- <div class="container"> -->
    <div class="card" style="width: 500px; height: 350px; justify-content: center; align-items: center;">
        <!-- <div class="content">
            <div class="contentBx"> -->
                <!-- Criando o formulário -->
                <form method="post" action="/admin/salvarAlteracaoUser">
                    <input type="hidden" class="id" name="id" value="<?php echo $data->id ?>">
                    <label>
                        <span>Nome</span>
                        <input type="text" class="nome" name="nome" value="<?php echo $data->nome ?>" required>
                    </label>
                    <label>
                        <span>E-mail</span>
                        <input type="text" class="email" name="email" value="<?php echo $data->email ?>" required>
                    </label>
                    <input type="submit" value="Salvar Alteração">
                    <a href="/admin/tableUsers">voltar</a>
                </form>
            <!-- </div>
        </div> -->
    </div>
<!-- </div> -->