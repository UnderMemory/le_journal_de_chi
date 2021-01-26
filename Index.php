<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Journal de Chi</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Le Journal de Chi</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Categories</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Archives</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Pages</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Contactez Moi</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!------------------------ Site Title ---------------------->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Entrez dans le</h3>
                <h1>Journal de Chi</h1>
                <button class="btn">Explorez</button>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/Chi1.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Post n°1 du journal de Chi</h3>
                                <button class="btn btn-blog">Lire</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/Blog-post/Chi2.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Post n°2 du journal de Chi</h3>
                                <button class="btn btn-blog">Lire</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/Blog-post/Chi3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Post n°3 du journal de Chi</h3>
                                <button class="btn btn-blog">Lire</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/Chi4.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Post n°4 du journal de Chi</h3>
                                <button class="btn btn-blog">Lire</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- Blog Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/post1.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;26 Janvier 2021</span>
                                <span>2 Commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Pourquoi les chats sont-ils heureux dans les arbres ? 
                                Nos enquêteurs ont enfin résolu ce grand mystère..</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                                adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                                nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                                illum similique veniam tempore unde?
                            </p>
                            <button class="btn post-btn">Lire la suite &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/post2.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;24 Janvier 2021</span>
                                <span>7 Commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Faut-il vraiment un minimum de 6 siestes par jour ? Une experte nous répond.</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                                adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                                nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                                illum similique veniam tempore unde?
                            </p>
                            <button class="btn post-btn">Lire la suite &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/post3.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;19 Janvier 2021</span>
                                <span>5 Commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Une journée dans la peau d'une enfant roi.</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                                adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                                nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                                illum similique veniam tempore unde?
                            </p>
                            <button class="btn post-btn">Lire la suite &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/post4.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;15 Janvier 2021</span>
                                <span>12 Commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Le quart d'heure de folie. 
                            Des études vous expliquent enfin pourquoi vous n'avez plus besoin de vous inquiéter pour la santé mentale de votre chat.</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                                adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                                nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                                illum similique veniam tempore unde?
                            </p>
                            <button class="btn post-btn">Lire la suite &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Categories</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Vie du quotidien</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Activités</a>
                                <span>(02)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Santé</a>
                                <span>(07)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Shopping</a>
                                <span>(01)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Nourriture</a>
                                <span>(08)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Les Populaires</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/minpost1.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;31 Octobre 2020
                                        2020</span>
                                    <span>2 Commentaires</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Témoignage d'une victime des déguisements d'Halloween.</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/minpost2.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;08 Juillet 2018</span>
                                    <span>6 Commentaires</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Les premiers pas pour se faire accepter par sa collocataire.</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/minpost3.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;19 Aout 2020</span>
                                    <span>8 Commentaires</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Comment choisir le meilleur endroit pour faire sa sieste ? </a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/minpost4.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;16 Septembre 2019</span>
                                    <span>13 Commentaires</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Conseils et Astuces pour passer un bon voyage en caisse de transport.</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/minpost5.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;09 Septembre 2018</span>
                                    <span>5 Commentaires</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Bilan des premiers mois dans ma nouvelle famille. </a>
                            </div>
                        </div>
                    </div>
                    <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                        <h2>Newsletter</h2>
                        <div class="form-element">
                            <input type="text" class="input-element" placeholder="Email">
                            <button class="btn form-btn">S'inscrire</button>
                        </div>
                    </div>
                    <div class="popular-tags">
                        <h2>Tags Populaires</h2>
                        <div class="tags flex-row">
                            <span class="tag" data-aos="flip-up" data-aos-delay="100">Vie</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="200">Shopping</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="300">Voyage</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="400">Nourriture</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="500">Jouets</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="600">Amour</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="600">Conseils</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="600">Astuces</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>A Propos de Nous</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Restez informés de nos dernièrs posts.</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
           
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Suivez nous</h2>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved |
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>