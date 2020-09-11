<?php
$noExiteSession = true;
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
} else {
    $noExiteSession = false;
}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            </svg></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Information <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <?php
            if ($noExiteSession) {
                echo "<a href='register.php' style='margin-right: 5px;' class='btn btn-outline-secondary my-2 my-sm-0' type='submit'>Register</a>";
                echo "<a href='login.php' class='btn btn-outline-secondary my-2 my-sm-0' type='submit'>Login</a>";
            } else {
                echo "<a href='logout.php' class='btn btn-outline-secondary my-2 my-sm-0' type='submit'>Logout</a>";
            };

            ?>
        </div>
    </nav>
    <div class="container col-md-12">
        <!-- <header class="row col-md 12">
            <h2 class="align-items-center">HEADER</h2>
        </header>
        <div class="row">
            <div class="col-md-4 offset-md-4">col-1/3</div>
            <div class="col-md-4">col-1/3</div>
        </div>
        <div class="row">
            <div class="col-md-4">col-1/3</div>
            <div class="col-md-8">col-2/3</div>
        </div>
        <div class="row">
            <div class="col-md-2">col-2/12</div>
            <div class="col-md-8">col-8/12</div>
            <div class="col-md-2">col-2/12</div>
        </div>
        <div class="row">
            <div class="col-md-3">col-1/4</div>
            <div class="col-md-3">col-1/4</div>
            <div class="col-md-3">col-1/4</div>
            <div class="col-md-3">col-1/4</div>
        </div>
        <div class="row">
            <div class="col-md-3">col-1/4</div>
            <div class="col-md-3">col-1/4</div>
            <div class="col-md-3">col-1/4</div>
            <div class="col-md-3">col-1/4</div>
        </div>
        <div class="row">
            <div class="col-md-1">col-1/12</div>
            <div class="col-md-8">col-9/12</div>
            <div class="col-md-2">col-2/12</div>
        </div>-->
        <div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text">With supporting text below as </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/login/images/imgFuac01.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Curso electiva interdisiplinar</h1>
                                    <h3>
                                        <p>Este curso se trata de wordpress y php la primera tarea es hacer un login.</p>
                                    </h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/login/images/imgFuac02.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Pagina hecha con bootstrap</h1>
                                    <h3>
                                        <p>Esta página se basa en la documentación de bootstrap hecha por Eder Carbonero.</p>
                                    </h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/login/images/imgFuac03.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1><strong>Pendiente por un título</strong></h1>
                                    <h3>
                                        <p>Esta vista esta pendiente por ser implementada</p>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </br></br>
            <div class="row">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    </br> </br> </br>
    <div name="subcontainer" class="container col-md-11">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="table-primary">Free Plan</th>
                    <th scope="col" class="table-secondary">Standard plan</th>
                    <th scope="col" class="table-success">Premium plan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>$ 0</th>
                    <th>$ 99</th>
                    <th>$ 999</th>
                </tr>
                <tr>
                    <th>Lorem ipsum</th>
                    <td>Lorem ipsum</td>
                    <td>Lorem ipsum</td>
                </tr>
                <tr>
                    <th>Lorem ipsum</th>
                    <td>Lorem ipsum</td>
                    <td>Lorem ipsum</td>
                </tr>
                <tr>
                    <th>-</th>
                    <td>Lorem ipsum</td>
                    <td>Lorem ipsum</td>
                </tr>
                <tr>
                    <th><button type="button" class="btn btn-success btn-block">Success</button></th>
                    <td><button type="button" class="btn btn-primary btn-block">Primary</button></td>
                    <td><button type="button" class="btn btn-danger btn-block">Danger</button></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
<footer class="container">
    <p class="mt-5 mb-3 text-muted text-center">© Eder Leandro Carbonero Baquero. 2020.</p>
</footer>

</html>