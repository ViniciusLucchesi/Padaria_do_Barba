<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="<?php echo base_url(); ?>padaria" class="logo d-flex align-items-center w-auto">
                            <img src="https://cdn-icons-png.flaticon.com/512/992/992747.png" alt="" style="max-height: 52px;">
                            <span class="d-none d-lg-block">Padaria do Barba</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-2">Criar novo registro</h5>
                                <p class="text-center small">Digite suas informações abaixo</p>
                            </div>

                            <form class="row g-3 needs-validation" method="POST" action="SalvarRegistro">

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">E-mail</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" name="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">Por favor digite seu e-mail.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="nome" required>
                                    <div class="invalid-feedback">Digite a senha!</div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Registrar</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>