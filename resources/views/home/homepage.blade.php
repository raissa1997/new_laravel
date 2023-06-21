<!DOCTYPE html>
<html lang="en">
  <head>
    @include('home.homecss')
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="./acceuil/img/shape.png" alt="" class="shape" />
        <!--Header-->
        @include('home.header')

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Bienvenue dans la classe,</h1>
                <h1>Votre espace membre digital.</h1>
              </div>
              <p class="text">
              Sont souvent mis en avant les atouts supposés favoriser la réussite professionnelle future des jeunes : les langues et le numérique.
              </p>
              <p class="text">
                In code We Trust
              </p>
            </div>

            <div class="right">
              <img src="acceuil/img/person.png" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="acceuil/app.js"></script>
  </body>
</html>
