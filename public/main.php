<?php include '../resources/config.php' ?>
<?php include '../resources/templates/front/header.php' ?>

    <div style="
              background-image: url(images/bg.jpg);
              height: 100%;
              text-after-overflow: ;
              background-position: center;
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;">
        <div style="opacity: 1">
            <section class="bg-background grey">
                <div class="container">
                    <h2 class="text-center bg-warning" align="center"><?php display_message(); ?></h2>
                    <div class="box-body">

                        <form action="" method="post" enctype="multipart/form-data">
                            <?php // search_main();?>
                            <h4 align="center">HIRE THE BEST MAKEUP ARTIST & HAIRSTYLIST</h4><hr>
                            <div class="form-group col-lg-3">
                                <input type="text" id="name" name="name" value="" placeholder="Keyword"
                                       class="form-control" />
                            </div>
                            <div class="form-group col-lg-3" >
                                <select class="form-control"  name="category">
                                    <option value="" disabled selected hidden>Category</option>
                                    <option value="customer" class="form-control">Customer</option>
                                    <option value="beautician" class="form-control">Beautician</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3 ">
                                <select class="form-control"  name="city">
                                    <option value="" disabled selected hidden>City</option>
                                    <option value="customer" class="form-control">Customer</option>
                                    <option value="beautician" class="form-control">Beautician</option>
                                </select>
                            </div>

                            <div class="form-group text-right col-lg-3">
                                <button type="button" name="submit" value="Search"
                                        class="btn btn-primary btn-block" onclick="alert('This features coming soon.')">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section><hr>

<!--            <section class="bg-background grey text-center" >-->
<!--                        <h2>Services</h2><hr>-->
<!--            </section>-->

            <section class="most-popular">
                <div class="line">
                    <div>Services</div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img10.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 10, 2016</div>
                                            <div class="category"><a href="category.html">Healthy</a></div>
                                        </div>
                                        <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img06.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 22, 2016</div>
                                            <div class="category"><a href="category.html">Healthy</a></div>
                                        </div>
                                        <h2><a href="single.html">Exercitation ullamco laboris nisi ut aliquip</a></h2>
                                        <p>Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui dui.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>327</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4  col-xs-12">
                        <div class="row">
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img05.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 09, 2016</div>
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                        </div>
                                        <h2><a href="single.html">Mauris elementum libero at pharetra auctor</a></h2>
                                        <p>Vivamus in efficitur mi. Nullam semper justo ut elit lacinia lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1083</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img07.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 21, 2016</div>
                                            <div class="category"><a href="category.html">Sport</a></div>
                                        </div>
                                        <h2><a href="single.html">Sed do eiusmod tempor incididunt ut labore</a></h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris elementum libero at pharetra auctor.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>980</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>


            </section>



            <section class="best-of-the-week">
                <div class="container">
                    <h1><div class="text">Makeup Aritst</div>
                        <div class="carousel-nav" id="best-of-the-week-nav">
                            <div class="prev">
                                <i class="ion-ios-arrow-left"></i>
                            </div>
                            <div class="next">
                                <i class="ion-ios-arrow-right"></i>
                            </div>
                        </div>
                    </h1>
                    <div class="owl-carousel owl-theme carousel-1">
                        <article class="article">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="images/news/img03.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <div class="detail">
                                        <div class="time">December 11, 2016</div>
                                        <div class="category"><a href="category.html">Travel</a></div>
                                    </div>
                                    <h2><a href="single.html">tempor interdum Praesent tincidunt</a></h2>
                                    <p>Praesent tincidunt, leo vitae congue molestie.</p>
                                </div>
                            </div>
                        </article>
                        <article class="article">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="images/news/img16.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <div class="detail">
                                        <div class="time">December 09, 2016</div>
                                        <div class="category"><a href="category.html">Sport</a></div>
                                    </div>
                                    <h2><a href="single.html">Maecenas porttitor sit amet turpis a semper</a></h2>
                                    <p> Proin vulputate, urna id porttitor luctus, dui augue facilisis lacus.</p>
                                </div>
                            </div>
                        </article>
                        <article class="article">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="images/news/img15.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <div class="detail">
                                        <div class="time">December 26, 2016</div>
                                        <div class="category"><a href="category.html">Lifestyle</a></div>
                                    </div>
                                    <h2><a href="single.html">Fusce ac odio eu ex volutpat pellentesque</a></h2>
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus</p>
                                </div>
                            </div>
                        </article>
                        <article class="article">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="images/news/img14.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <div class="detail">
                                        <div class="time">December 26, 2016</div>
                                        <div class="category"><a href="category.html">Travel</a></div>
                                    </div>
                                    <h2><a href="single.html">Nulla facilisis odio quis gravida vestibulum</a></h2>
                                    <p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
                                </div>
                            </div>
                        </article>
                        <article class="article">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="images/news/img01.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <div class="detail">
                                        <div class="time">December 26, 2016</div>
                                        <div class="category"><a href="category.html">Travel</a></div>
                                    </div>
                                    <h2><a href="single.html">Fusce Ullamcorper Elit At Felis Cursus Suscipit</a></h2>
                                    <p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
                                </div>
                            </div>
                        </article>
                        <article class="article">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="images/news/img11.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <div class="detail">
                                        <div class="time">December 26, 2016</div>
                                        <div class="category"><a href="category.html">Travel</a></div>
                                    </div>
                                    <h2><a href="single.html">Donec consequat arcu at ultrices sodales</a></h2>
                                    <p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ol>
                            <h1 class="page-title">Contact Us</h1>
                            <p class="page-subtitle">We hear you</p>
                            <div class="line thin"></div>
                            <div class="page-description">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h3>Contact</h3>
                                        <p>
                                            Aliquam in maximus massa. In magna dolor, efficitur vitae faucibus sagittis, elementum quis lacus. Aliquam pretium sem lectus, vitae gravida ex efficitur vitae.
                                        </p>
                                        <p>
                                            Phone: <span class="bold">+123 45 678 9</span> <br>
                                            Email: <span class="bold">hi@yourcompany.com</span>
                                            <br>
                                            <br>
                                            Syarifuddin Street<br>
                                            Indonesia, Bogor Barat 16115
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <form class="row contact" id="contact-form">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name <span class="required"></span></label>
                                                    <input type="text" class="form-control" name="name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email <span class="required"></span></label>
                                                    <input type="text" class="form-control" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input type="text" class="form-control" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Your message <span class="required"></span></label>
                                                    <textarea class="form-control" name="message" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-primary">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>


<?php include '../resources/templates/front/footer.php' ?>