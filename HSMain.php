<?php
session_start();
include 'cone.php'; // Asegúrate de incluir la conexión a la base de datos
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hype-Step Online</title>
    <link rel="stylesheet" href="HSMain.css" />
    <link rel="stylesheet" href="carousel.css"/>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Karma:wght@700&family=Kalam:wght@400&family=Kavoon&display=swap"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.30.0/tabler-icons.min.css"
    />
  </head>
  <body>
    <div class="container">
      <header class="main-header">
    <button class="menu-toggle"><i class="ti ti-menu-2"></i></button>
    <img
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/f5b519b5427d5627acb0bd3421ee744782d65468"
        alt="Logo"
        class="logo"
    />
    <div class="login-container">
      
        <?php if(isset($_SESSION['username'])){

        ?>
            <!-- Mostrar cuando el usuario está logueado -->
            <span class="user-name"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ff94ed75e07a4247aba4226ebce72d6870001ae"
                alt="User"
                class="user-icon"
            />
            <a href="logout.php" class="login-text">Cerrar sesión</a>
        <?php }else{ ?>
            <!-- Mostrar cuando no hay sesión -->
            <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ff94ed75e07a4247aba4226ebce72d6870001ae"
                alt="User"
                class="user-icon"
            />
            <a href="HSLoggin.html" class="login-text">Iniciar sesión</a>
        <?php } ?>
    </div>
</header>

      <main class="main-content">
        <section class="mission-section">
          <h1 class="page-title">Hype-Step Online</h1>
          <p class="mission-text">
            <span>
              Mision:Ofrecer a los amantes de los sneakers una tienda en línea
              confiable y accesible, con una amplia variedad de modelos y
              marcas, garantizando autenticidad, precios justos y un servicio
              excepcional. Nos enfocamos en brindar una experiencia de compra
              segura, con métodos de pago confiables, envíos rápidos y atención
              personalizada para cada cliente.
            </span>
            <br />
            <br />
            <span>
              Vision: Convertirnos en la tienda de sneakers en línea de
              referencia en el mercado, reconocida por nuestra autenticidad,
              exclusividad y compromiso con la comunidad sneakerhead. Aspiramos
              a expandir nuestra oferta, incluir ediciones limitadas y
              fortalecer la confianza de nuestros clientes mediante innovación
              tecnológica y un servicio al cliente impecable.
            </span>
          </p>
        </section>

        <section class="brand-section">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0b9b2053e4adb07c5b0a15d8cd38172f2928760"
            alt="Brand Logo"
            class="brand-logo"
          />
        </section>

        <section class="location-section">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/f7c11a2d4d4c27b81190c1f49f4bec3daff4d985"
            alt="Store Location"
            class="map-image"
          />
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/f29fb1d22213eaf25627c2123861b1e33e02fcf8"
            alt="Location Icon"
            class="location-icon"
          />
          <a
            href="https://maps.app.goo.gl/7VcZqp7qu4BLfpkm9"
            class="location-address"
          >
            https://C. Nueva Escocia 1885, Providencia 5a Secc., 44638
            Guadalajara, Jal.
          </a>
        </section>
          <div class="carousel" id="carouselImages">
            <img src="https://erreizando.com/wp-content/uploads/2021/04/4k-uhd-background-blur-close-up-sneakers-shoes-legs-asphalt.jpg" alt="Imagen 1" class="active">
            <img src="https://editorialtelevisa.brightspotcdn.com/dims4/default/a456997/2147483647/strip/true/crop/1195x672+3+0/resize/1440x810!/quality/90/?url=https%3A%2F%2Fk2-prod-editorial-televisa.s3.us-east-1.amazonaws.com%2Fbrightspot%2Fwp-content%2Fuploads%2F2022%2F10%2FSneakers-como-combinarlos-con-tus-outfits-casuales-1.jpg" alt="Imagen 2">
            <img src="https://i.pinimg.com/736x/6e/14/fb/6e14fb34eab1aca8a1526b4c53c72ecb.jpg" alt="Imagen 3">
            <button class="boton prev" id ="btnprev" >&#10094;</button>
            <button class="boton next" id="btnnext">&#10095;</button>
          </div> 
        <script src="carousel.js"></script>
        <section class="products-section">
          <h2 class="products-title">Productos disponibles</h2>
          <div class="products-grid">
            <article class="product-card">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/4223bf1a870190c3b784b160455c0f8be23b8621"
                alt="Nike Jordan 1"
                class="product-image"
              />
              <div class="product-info">
                <p class="product-price">$300 USD</p>
                <p class="product-name">Nike Jordan 1 Chicago red Off White</p>
              </div>
            </article>

            <article class="product-card">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/d1d973fc022ac07c6e3683b72c5656756335efb4"
                alt="Nike Air Force 1"
                class="product-image"
              />
              <div class="product-info">
                <p class="product-price">$100 USD</p>
                <p class="product-name">Nike Air Force 1 lvl 8 Supreme</p>
              </div>
            </article>

            <article class="product-card">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/0991f7143fd91e0c8399afdb4716338ae3e0029b"
                alt="Nike SB dunk"
                class="product-image"
              />
              <div class="product-info">
                <p class="product-price">$900 USD</p>
                <p class="product-name">Nike SB dunk Ben &amp; Jerry´s</p>
              </div>
            </article>
          </div>
        </section>

        <section class="productos-section">
          <button onclick="window.location.href='productosUsuario.php'" class="ver-productos-btn">
            Ver todos los productos
          </button>
        </section>
      </main>

      <footer class="main-footer">
        <div class="footer-content">
          <h3 class="footer-title">Hype_Step.oficial</h3>
          <div class="social-icons">
            <a href="#" class="social-link">
              <svg
                class="social-icon"
                width="53"
                height="45"
                viewBox="0 0 53 45"
                fill="#828282"
              >
                <!-- Twitter/X icon placeholder -->
                <rect
                  width="53"
                  height="45"
                  fill="#828282"
                  opacity="0.5"
                ></rect>
              </svg>
            </a>
            <a href="#" class="social-link">
              <svg
                class="social-icon"
                width="53"
                height="45"
                viewBox="0 0 53 45"
                fill="#828282"
              >
                <!-- Facebook icon placeholder -->
                <rect
                  width="53"
                  height="45"
                  fill="#828282"
                  opacity="0.5"
                ></rect>
              </svg>
            </a>
            <a href="#" class="social-link">
              <svg
                class="social-icon"
                width="53"
                height="45"
                viewBox="0 0 53 45"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.225 0H37.275C45.675 0 52.5 5.85 52.5 13.05V31.95C52.5 35.4111 50.8959 38.7304 48.0407 41.1777C45.1855 43.6251 41.3129 45 37.275 45H15.225C6.825 45 0 39.15 0 31.95V13.05C0 9.58892 1.60406 6.26961 4.4593 3.82226C7.31454 1.37491 11.1871 0 15.225 0ZM14.7 4.5C12.1937 4.5 9.79006 5.35339 8.01784 6.87244C6.24562 8.39148 5.25 10.4517 5.25 12.6V32.4C5.25 36.8775 9.47625 40.5 14.7 40.5H37.8C40.3063 40.5 42.7099 39.6466 44.4822 38.1276C46.2544 36.6085 47.25 34.5483 47.25 32.4V12.6C47.25 8.1225 43.0238 4.5 37.8 4.5H14.7ZM40.0312 7.875C40.9015 7.875 41.7361 8.17132 42.3514 8.69876C42.9668 9.22621 43.3125 9.94158 43.3125 10.6875C43.3125 11.4334 42.9668 12.1488 42.3514 12.6762C41.7361 13.2037 40.9015 13.5 40.0312 13.5C39.161 13.5 38.3264 13.2037 37.7111 12.6762C37.0957 12.1488 36.75 11.4334 36.75 10.6875C36.75 9.94158 37.0957 9.22621 37.7111 8.69876C38.3264 8.17132 39.161 7.875 40.0312 7.875ZM26.25 11.25C29.731 11.25 33.0694 12.4353 35.5308 14.545C37.9922 16.6548 39.375 19.5163 39.375 22.5C39.375 25.4837 37.9922 28.3452 35.5308 30.455C33.0694 32.5647 29.731 33.75 26.25 33.75C22.769 33.75 19.4306 32.5647 16.9692 30.455C14.5078 28.3452 13.125 25.4837 13.125 22.5C13.125 19.5163 14.5078 16.6548 16.9692 14.545C19.4306 12.4353 22.769 11.25 26.25 11.25ZM26.25 15.75C24.1614 15.75 22.1584 16.4612 20.6815 17.727C19.2047 18.9929 18.375 20.7098 18.375 22.5C18.375 24.2902 19.2047 26.0071 20.6815 27.273C22.1584 28.5388 24.1614 29.25 26.25 29.25C28.3386 29.25 30.3416 28.5388 31.8185 27.273C33.2953 26.0071 34.125 24.2902 34.125 22.5C34.125 20.7098 33.2953 18.9929 31.8185 17.727C30.3416 16.4612 28.3386 15.75 26.25 15.75Z"
                  fill="#828282"
                ></path>
              </svg>
            </a>
          </div>
        </div>
      </footer>
    </div>
  </body>
  
</html>
