<!-- BANNER -->
<div class="img-header">
<?php include('header.php'); ?>


  <h1 class="text-uppercase title-header">Title website</h1>
  <h2 class="slogan ">Phasellus dictum metus elit, non ultrices neque accumsan id.</h2>

  <div class="buttons">
    <a class="btn btn-primary" href="#" role="button">See posts</a>
    <a class="btn btn-primary" href="#infos" role="button">Infos</a>
  </div>

</div>


<!-- SECTION INFOS -->
<section class="section-info" id="infos">

  <div class="container">

    <div class="row pb-3">
      <div class="col-lg-12">
        <h2 class="title-h2 soulignage">Informations</h2>
        <!-- <div class="soulignage"></div> -->
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <p class="info-p text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet...</p>
      </div>
    </div>

    <div class="row pt-4 d-flex justify-content-between">
      <div class="col-lg-4">
        <div class="card text-center py-4 ml-0" style="width: 18rem;">
          <img src="images/beach.png" class="card-img-top w-25 mx-auto" alt="icone beach">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae lacinia lorem. Maecenas posuere pellentesque euismod. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-center py-4" style="width: 18rem;">
          <img src="images/iceberg.png" class="card-img-top w-25 mx-auto" alt="icone iceberg">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae lacinia lorem. Maecenas posuere pellentesque euismod. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-center py-4 mr-0" style="width: 18rem;">
          <img src="images/nature.png" class="card-img-top w-25 mx-auto" alt="icone nature">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae lacinia lorem. Maecenas posuere pellentesque euismod. </p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>


<!-- SECTION POSTS -->
<section class="section-posts">

  <div class="container">

    <h2 class="title-h2 title-posts text-center soulignage-blue">Posts</h2>

    <div class="row row-cols-1 row-cols-md-2 g-4 text-center pt-5">
      <div class="col">
        <div class="card w-75">
          <a href="#"><img src="images/post1.jpg" class="card-img-top" alt="image example"></a>
          <div class="card-body post-card">
            <h5 class="card-title">Aenean condimentum sagittis iaculis. </h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium consectetur orci vitae molestie...</p>
            <a class="post-suite text-uppercase text-center" href="#">Continue reading</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card w-75">
          <a href="#"><img src="images/post2.jpg" class="card-img-top" alt="image example"></a>
          <div class="card-body post-card">
            <h5 class="card-title">Cras consectetur tortor nec.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium consectetur orci vitae molestie...</p>
            <a class="post-suite text-uppercase text-center" href="#">Continue reading</a>
          </div>
        </div>
      </div>
    </div>

    <span class="button py-5"><a class="btn btn-primary btn-lg text-uppercase px-5" href="#" role="button">See all posts</a></span>

  </div>

</section>
















<?php include('footer.php'); ?>
