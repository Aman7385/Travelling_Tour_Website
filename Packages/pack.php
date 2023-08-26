<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pack.css">
    <link rel="stylesheet" href="mainstyle.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php require '../navbar/_nav.php'?>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1600x700/?nature,water" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1600x700/?trees,grass" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1600x700/?roads,mountains" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- caroousel -->

<!-- Cards -->
<div class="card-group container-fluid">
        <div class="card mx-2" style="border-radius: 50px;">
            <img src="../assest/images/package-5.jpg" class="card-img-top " style="border-radius: 50px 50px 0 0;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content.
                    This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mx-2" style="border-radius: 50px;">
            <img src="../assest/images/package-1.png" class="card-img-top " style="border-radius: 50px 50px 0 0;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mx-2" style="border-radius: 50px;">
            <img src="../assest/images/package-2.png" class="card-img-top" style="border-radius: 50px 50px 0 0;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content.
                    This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    </div>
    <br>
    <!-- Packages -->
<!-- Cards -->
<div class="card-group container-fluid">
        <div class="card mx-2" style="border-radius: 50px;">
            <img src="../assest/images/package-5.jpg" class="card-img-top " style="border-radius: 50px 50px 0 0;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content.
                    This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mx-2" style="border-radius: 50px;">
            <img src="../assest/images/package-1.png" class="card-img-top " style="border-radius: 50px 50px 0 0;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mx-2" style="border-radius: 50px;">
            <img src="../assest/images/package-2.png" class="card-img-top" style="border-radius: 50px 50px 0 0;" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content.
                    This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    </div>
    <br>
    <!-- Packages -->


    <!-- Packages -->

    <div class="container2">

        <div class="box box1">
            <img src="https://source.unsplash.com/1600x700/?india">
            <h3>India</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box2">
            <img src="https://source.unsplash.com/1600x700/?usa">
            <h3>New York</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box3">
            <img src="https://source.unsplash.com/1600x700/?forest">
            <h3>Africa</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>

        <div class="box box4">
            <img src="https://source.unsplash.com/1600x700/?venice">
            <h3>Venice</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box5">
            <img src="https://source.unsplash.com/1600x700/?london">
            <h3>London</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?paris">
            <h3>Paris</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
        <div class="box box6">
            <img src="https://source.unsplash.com/1600x700/?tour">
            <h3>Coming Soon...</h3>
            <p>Everyone needs to travel across all places and it needs to be beautiful.</p>
        </div>
    </div>
    </div>

    <?php require '../Footer/_footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>