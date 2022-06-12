<?php require APPROOT . '/views/includeClient/header.php'; ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #DFEBE9;
        }

        #resp {
            display: none !important;
        }

        @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }

            #cards {
                display: none !important;
            }

            #resp {
                display: block !important;
            }
        }
    </style>
</head>

<body>

<?php require APPROOT . '/views/includeClient/navbar.php'; ?>

    <div class="container-fluid d-flex justify-content-center align-items-center flex-column" style="width: 100%;"
        id="cards">
        <div class="row" style="margin-top: 10%;">
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="puppy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            style="background-color: #bfe6ba;">See
                        </a>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="puppy.webp" class="card-img-top" alt="...">
                                <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                                <p class="fw-bold">5 months old</p>
                                <p>Youssoufia</p>
                                <a href="">seller's name</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">ADOPTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="fluffy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="dog.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                        <p class="card-text">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 10%;">
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="puppy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="fluffy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="dog.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                        <p class="card-text">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 10%;">
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="puppy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="fluffy.webp" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="dog.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                        <p class="card-text">Hello there can you adopt me. I have no home.</p>
                        <a href="#" class="btn w-100" style="background-color: #bfe6ba;">See</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- responsive -->
    <div class="container-fluid d-flex flex-column" style="margin-top: 30%;" id="resp">
        <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
        <div class="card d-flex justify-content-center align-items-center">
            <img src="puppy.webp" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                <p class="fw-bold">5 months old</p>
                <p>Youssoufia</p>
                <a href="">seller's name</a>
                <a href="#" class="btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="background-color: #bfe6ba;">ADOPTE</a>
            </div>
        </div>
    </div>
    
    <?php require APPROOT . '/views/includeClient/header.php'; ?>
