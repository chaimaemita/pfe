<?php require APPROOT . '/views/includeClient/header.php'; ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;

            display: flex;
            flex-direction: column;
            background-color: #DFEBE9;
        }

        #cards {
            width: 18rem;
        }

        @media screen and (max-width: 472px) {
            body {
                display: flex;
                flex-direction: column;
            }

            #home {
                display: flex;
                flex-direction: column;
                margin-top: 60px;
                margin-bottom: 100%;
            }

            #img {
                display: none;
            }

            #parag {
                width: 100%;
                font-size: 10%;
                padding: 0 !important;
            }

            #cards {
                margin-top: 10%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column !important;
                width: 100%;

            }
        }
    </style>
</head>

<body>

<?php require APPROOT . '/views/includeClient/navbar.php'; ?>

    <div class="container-fluid" style="background-color: #DFEBE9; padding: 10%;" id="scrollspyHeading1">
        <div class="d-flex justify-content-center align-items-center flex-row" id="home"
            style="padding: 0 5%; border: 1px solid #DFEBE9; padding: 10px; box-shadow: 5px 10px 18px #888888; border-radius: 5px;">
            <div class="">
                <img src="needs.png" alt="" style="height: 350px;" id="img">
            </div>
            <div class="d-flex flex-column">
                <p class="w-75" id="parag" style="font-size: 18px; padding-left: 20%;"><span
                        class="fw-bold">E-pet.com</span> is one of moroccan's leading online pet
                    stores. offering the highets quality over-the-counter pet
                    medications. We understand the special bond
                    between you and your pet and take their health and
                    well-being very seriously. We hope to become your
                    favorite 1-stop online pet store, where you find quality
                    products at unbeatable prices.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center flex-row"
        style="height: 100vh; width: 100%;" id="cards">
        <div class="card d-flex justify-content-center align-items-center">
            <img src="puppy.webp" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">JOE <i class="bi bi-heart"></i></h5>
                <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                <a href="petsposts.html" class="btn w-100" style="background-color: #bfe6ba;">See</a>
            </div>
        </div>
        <div class="card d-flex justify-content-center align-items-center">
            <img src="fluffy.webp" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">LOOLOO <i class="bi bi-heart-fill"></i></h5>
                <p class="card-text text-center">Hello there can you adopt me. I have no home.</p>
                <a href="petsposts.html" class="btn w-100" style="background-color: #bfe6ba;">See</a>
            </div>
        </div>
        <div class="card d-flex justify-content-center align-items-center">
            <img src="dog.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">COCO <i class="bi bi-suit-heart"></i></h5>
                <p class="card-text">Hello there can you adopt me. I have no home.</p>
                <a href="petsposts.html" class="btn w-100" style="background-color: #bfe6ba;">See</a>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/includeClient/footer.php'; ?>
