
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Joseph Riosa</title>
  </head>

  <body>
    <!--NAVBAR SECTION-->
    <header class="header">
      <div class="header-inner">
        <div class="container-fluid px-lg-5">
          <nav class="navbar navbar-expand-lg my-navbar">
            <a class="navbar-brand" href="#"
              ><span class="logo"> J. RIOSA</span>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"
                ><i class="fas fa-bars" style="margin: 5px 0px 0px 0px"></i
              ></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a class="nav-link" href="./home.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./projects.html">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Socials
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a
                      class="dropdown-item fab fa-discord"
                      href="https://discordapp.com/users/861640349734273045"
                    >
                      Discord</a
                    >
                    <div class="dropdown-divider"></div>
                    <a
                      class="dropdown-item fab fa-instagram"
                      href="https://www.instagram.com/jh.peso/"
                    >
                      Instagram</a
                    >
                    <div class="dropdown-divider"></div>
                    <a
                      class="dropdown-item fab fa-facebook"
                      href="https://www.facebook.com/joseph.riosa.9/"
                    >
                      Facebook</a
                    >
                    <div class="dropdown-divider"></div>
                    <a
                      class="dropdown-item fab fa-github"
                      href="https://github.com/AlexHereToCode"
                    >
                      Github</a
                    >
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="header-btn my-2 my-sm-0" type="submit">
                  +63-916-733-8237
                </button>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="spacer" style="height: 76.5px; background-color: #4e3dbb"></div>

    <!--CONTACT SECTION-->
    <section class="contact_wrapper">
      <div class="container mt-4 mt-md-0">
        <div style="height: 38px"></div>
        <div class="col-sm-6 offset-sm-3 text-center mt-3">
          <h3 class="text-white">Let's Talk!</h3>
          <h6 class="text-white mb-5">
            Have any projects in mind? I can assist you in making your dream
            project into a reality!
          </h6>
          <form action="save.php" method="post" class="px-4">
            <div class="form my-4 text-white">
              <input
                name="name"
                type="text"
                class="form-control"
                id="name"
                placeholder="Your Name"
              />
            </div>
            <div class="form my-4">
              <input
                name="email"
                type="email"
                class="form-control"
                id="email"
                placeholder="Your Email"
              />
            </div>
            <div class="form my-4">
              <textarea
                class="form-control"
                rows="5"
                id="comment"
                name="comment"
                placeholder="Tell me about your project "
              ></textarea>
            </div>

            <button
              type="submit"
              name="submit"
              class="main-btn secondary-btn border-white mb-3"
              id="contact_btn"
            >
              Send Message
            </button>
            <div style="height: 38px"></div>
          </form>
        </div>
      </div>
    </section>

    <!--FOOTER SECTION-->
    <section id="contact" class="footer_wrapper mt-3 mt-md-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6"></div>
          <div class="col-lg-4 col-md-6">
            <ul
              class="list-unstyled d-flex justify-content-center justify-content-md-end justify-content-lg-center jus social-icon mb-3 mb-md-0"
            >
              <li>
                <a href="https://discordapp.com/users/861640349734273045">
                  <i class="fab fa-discord"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/jh.peso/"
                  ><i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/joseph.riosa.9/"
                  ><i class="fab fa-facebook"></i
                ></a>
              </li>
              <li>
                <a href="https://github.com/AlexHereToCode"
                  ><i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script src="script/slim.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/script.js"></script>
  </body>
</html>