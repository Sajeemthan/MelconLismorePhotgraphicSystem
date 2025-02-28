<?php
include "./dbConnection.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./gallery.css" />
    <title>Malcolm Lismore Gallery</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">Malcolm Lismore</a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <span><i class="ri-menu-line"></i></span>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="price.html">Prices</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="enquiry.html">Enquiry</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section class="section__container">
        <h2 class="section__header">Photography Gallery</h2>
        <?php
            $qry = "SELECT * FROM upload";
            $res = $conn->query($qry);

            while($row = $res->fetch_assoc()){
                ?>
                <div class="gallery__item">
                    <img src="images/<?php echo $row["image"]; ?>" alt="gallery" />
                    <div class="description"><?php echo $row["title"]; ?></div>
                </div>

                <?php
            }
        ?>
      </section>
    </main>

    <script>
      document.getElementById('menu-btn').addEventListener('click', function () {
          document.getElementById('nav-links').classList.toggle('open');
      });
  </script>
  </body>
</html>
