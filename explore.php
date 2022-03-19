<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="exploreStyle.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem;height: 25.5rem;margin: 5%;">
                        <img src="drum.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Drum Set</h5>
                            <p class="card-text">
                                A set of drums, cymbals and some other percussion instruments... played by a single player and
                                arranged accordingly
                            </p>
                            <a href="drum.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Drum Set">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem; height: 25.5rem;margin: 5%;">
                        <img src="flute.jfif" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Flute</h5>
                            <p class="card-text">
                                An instrument that produces sound from the flow of air across an opening
                            </p>
                            <a href="flute.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Flute">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem;height: 25.5rem;margin: 5%;">
                        <img src="guitar.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Guitar</h5>
                            <p class="card-text">A string instrument played by either strumming or plucking of strings</p>
                            <a href="Guitarr.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Guitar">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem;height: 25.5rem;margin: 5%;">
                        <img src="tabla.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tabla</h5>
                            <p class="card-text">Tabla has been the principal percussion instrument in Hindustani classical music since 18th century<br>
                            <a href="tabla.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Tabla">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem;height: 25.5rem;margin: 5%;">
                        <img src="piano.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Piano</h5>
                            <p class="card-text">The word piano is a shortened form of pianoforte,The Italian musical terms piano and forte indicate "soft" and "loud" respectively
                            <br></p>
                            <a href="piano.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Piano">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem;height: 25.5rem;margin: 5%;">
                        <img src="saxophone.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Saxophone</h5>
                            <p class="card-text">The saxophone is a type of single-reed woodwind instrument with a conical body, usually made of brass. 
                            <br></p>
                            <a href="saxophone.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Saxophone">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem;height: 25.5rem;margin: 5%;">
                        <img src="trumpet.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Trumpet</h5>
                            <p class="card-text">An instrument commonly used in classical & jazz ensembles, they are played by blowing air through nearly-closed lips</p>
                            <a href="trumpet.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Trumpet">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="wishlist.php" method="POST">
                    <div class="card zoom" style="width: 18rem;height: 25.5rem;margin: 5%;">
                        <img src="violin.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Violin</h5>
                            <p class="card-text">The violin is a string instrument which has four strings and is played with a bow.</p>
                            <a href="violin.html" class="btn btn-primary">View More</a>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Violin">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>