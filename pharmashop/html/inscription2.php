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
                  <h3 class="mb-5 text-uppercase">Inscription</h3>
                  <!-- class row (ligne) -->
                  <form method="post" action="addadmine.php">
                    <div class="row">
                      <!-- la lageur du colonne (col-md-6 mb-4) -->
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="number" id="cin" name="cin" class="form-control form-control-lg" />
                          <label class="form-label" for="cin">Cin</label>
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" />
                          <!-- insertion du prenom  -->
                          <label class="form-label" for="prenom">Prénom</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="nom" name="nom" class="form-control form-control-lg" />
                          <label class="form-label" for="nom">Nom</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="adresse" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="adresse">Adresse</label>
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                      <h6 class="mb-0 me-4">Genre: </h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="civilite" id="femme" value="f" />
                        <label class="form-check-label" for="femme">Femme</label>
                      </div>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="civilite" id="Homme" value="m" />
                        <label class="form-check-label" for="Homme">Homme</label>
                      </div>



                    </div>

                    <div class="row">

                      <div class="col-md-6 mb-4">

                        <select class="select" name="ville">
                          <option value="">ville</option>
                          <option value="tunis">Tunis</option>
                          <option value="ariana">ariana </option>
                          <option value="beja">beja </option>
                          <option value="benarous">ben arous </option>
                          <option value="bizerte">bizerte </option>
                          <option value="gabes">gabes </option>
                          <option value="gafsa">gafsa </option>
                          <option value="jendouba">jendouba </option>
                          <option value="kairouan">kairuan </option>
                          <option value="kebelii">kebelli </option>
                          <option value="manouba">manouba </option>
                          <option value="kef">kef </option>
                          <option value="mahdia">mahdia </option>
                          <option value="medinine">medenine </option>
                          <option value="monastir">monastir </option>
                          <option value="nabeul">nabeul </option>
                          <option value="sfax">sfax </option>
                          <option value="sidibouzid">sidi bouzid </option>
                          <option value="siliana">siliana </option>
                          <option value="soussse">sousse </option>
                          <option value="tatouine">tatouine </option>
                          <option value="tozeur">tozeur </option>
                          <option value="zaghouan">zaghouan </option>
                          <option value="kesserine">kessrine </option>
                        </select>

                      </div>
                    </div>



                    <div class="form-outline mb-4">
                      <input type="password" id="mdp" name="mot_de_passe" class="form-control form-control-lg" />
                      <label class="form-label" for="mdp">mot de passe</label>
                    </div>


                    <div class="d-flex justify-content-end pt-3">
                      <a type="button" href="index2.php" class="btn btn-light btn-lg">Page d'accueil</a>
                      <button type="submit" name="inscription" value="valider" class="btn btn-warning btn-lg ms-2"
                        onclick="valider()">Valider</button>
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