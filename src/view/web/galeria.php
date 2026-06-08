<?php include DIR_INCLUDE . 'head.php'; ?>
<?php include DIR_INCLUDE . 'navbar.php'; ?>

<main class="container pt-5">

    <h3 class="mt-5 txt_escuro">GALERIA DE IMAGENS</h3>

    <div class="container mt-4 p-0">

        <div class="row row-cols-2 row-cols-md-6 g-3 overflow-hidden">

            <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="/src/assets/img/gal_001.png">
                    <img src="/src/assets/img/gal_001.png" alt="Fanfarra" class="img-fluid efeito-galeria">
                </a>
            </div>

            <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="/src/assets/img/gal_002.png">
                    <img src="/src/assets/img/gal_002.png" alt="Fanfarra" class="img-fluid efeito-galeria">
                </a>
            </div>

            <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="/src/assets/img/gal_003.png">
                    <img src="/src/assets/img/gal_003.png" alt="Fanfarra" class="img-fluid efeito-galeria">
                </a>
            </div>

            <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="/src/assets/img/gal_004.png">
                    <img src="/src/assets/img/gal_004.png" alt="Fanfarra" class="img-fluid efeito-galeria">
                </a>
            </div>

            <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="/src/assets/img/gal_005.png">
                    <img src="/src/assets/img/gal_005.png" alt="Fanfarra" class="img-fluid efeito-galeria">
                </a>
            </div>

        </div>

    </div>


   
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Imagem Galeria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="imgModal" src="" alt="Fanfarra" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


</main>

<?php include DIR_INCLUDE . 'footer.php'; ?>
<?php include DIR_INCLUDE . 'end.php'; ?>