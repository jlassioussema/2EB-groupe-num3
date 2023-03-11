<!DOCTYPE html>
<html lang="en">

<head>
  <!-- integration de bootstrap v4.1  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</head>

<body>
  <form method="post" action="connex.php">

    <section class="h-100 bg-dark" style="background-color: rgb(71, 71, 71);">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <!-- //here insertion d'image -->
                <div class="col-xl-6 d-none d-xl-block">
                  <img src="images/signupimage.jpg" style="height: 1000px;" alt="Sample photo" class="img-fluid"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <!-- titre d'inscri  -->
                    <h3 class="mb-5 text-uppercase">connexion</h3>
                    <!-- class row (ligne) -->
                    <div class="form-outline mb-4">
                      <input type="text" id="adresse" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="adresse">Adresse</label>
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                      <h6 class="mb-0 me-4">Role :</h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="role" id="admin" value="admin" />
                        <label class="form-check-label" for="admin">Admin</label>
                      </div>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="role" id="client" value="client" />
                        <label class="form-check-label" for="client">Client</label>
                      </div>
                    </div>



                    <div class="form-outline mb-4">
                      <input type="password" id="mdp" name="mot_de_passe" class="form-control form-control-lg" />
                      <label class="form-label" for="mdp">mot de passe</label>
                    </div>


                    <div class="d-flex justify-content-end pt-3">
                      <a type="button" a href="index.php" class="btn btn-light btn-lg">Page d'accueil</a>
                      <button type="submit" name="connecter" value="se connecter" class="btn btn-warning btn-lg ms-2"
                        onclick="se connecter()" a href="index2.php">se connecter</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</body>

</html>