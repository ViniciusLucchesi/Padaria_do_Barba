<main>
    <!-- Left-menu -->
    <div class="left-menu">
        <a class="button" href="/">
            <ion-icon name="restaurant"></ion-icon>
        </a>
        <a class="button active" href="/padaria/bebidas">
            <ion-icon name="beer"></ion-icon>
        </a>
        <a class="button" href="/padaria/doces">
            <ion-icon name="ice-cream"></ion-icon>
        </a>
        <a class="button" href="/admin">
            <ion-icon name="accessibility"></ion-icon>
        </a>
    </div>
    <!-- Produtos -->
    <div class="content">
        <?php echo $tabela; ?> 
    </div>
</main>