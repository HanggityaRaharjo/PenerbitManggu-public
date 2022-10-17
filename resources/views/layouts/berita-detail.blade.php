@extends('layouts.master')
@section('title','Berita Detail')
@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.jpg);"></div>
        <div class="container">
            <h2>Manggu Info</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li ><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
</section>
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="blog-card__image blog-details__image">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <img src="assets/images/blog/blog-d-1-1.jpg" class="img-fluid" alt="">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <div class="blog-details__content blog-card__content">
                            <h3>How to Findout Healthy Food For Body</h3>
                            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum
                                quia
                                quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                                lacus
                                quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy
                                text
                                of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text
                                ever
                                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the
                                new
                                design printng and type setting Ipsum Take a look at our round up of the best shows coming soon
                                to
                                your telly box has been the is industrys. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has industr standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived
                                not only five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including
                                versions of.</p>
                            <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet
                                finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has been the ndustry stan printer took a galley.</p>
                        </div><!-- /.blog-details__content -->
                        <div class="blog-details__meta">
                            <p class="blog-details__tags"><span>Tags:</span><a href="#">Oragnic,</a><a href="#">Healthy,</a><a href="#">Recipes</a></p>
                            <div class="blog-details__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div><!-- /.blog-details__social -->
                        </div><!-- /.blog-details__meta -->

                        <div class="blog-author">
                            <div class="blog-author__image">
                                <img src="assets/images/blog/blog-author-1-1.jpg" alt="">
                            </div><!-- /.blog-author__image -->
                            <div class="blog-author__content">
                                <h3>Curtis Swanson</h3>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem
                                    ipsum quia quaed veritatis et quasi architecto.</p>
                            </div><!-- /.blog-author__content -->
                        </div><!-- /.blog-author -->
                        <div class="blog-comment">
                            <h2>2 Comments</h2>
                            <div class="blog-comment__box">
                                <div class="blog-comment__image">
                                    <img src="assets/images/blog/blog-comment-1-1.jpg" alt="">
                                </div><!-- /.blog-comment__image -->
                                <div class="blog-comment__content">
                                    <div class="blog-comment__content-top">
                                        <h3>Jessica Brown</h3>
                                        <span>28 Nov, 2020</span>
                                    </div><!-- /.blog-comment__content-top -->
                                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                        dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="#" class="thm-btn">Reply</a><!-- /.thm-btn -->
                                </div><!-- /.blog-comment__content -->
                            </div><!-- /.blog-comment__box -->
                            <div class="blog-comment__box">
                                <div class="blog-comment__image">
                                    <img src="assets/images/blog/blog-comment-1-2.jpg" alt="">
                                </div><!-- /.blog-comment__image -->
                                <div class="blog-comment__content">
                                    <div class="blog-comment__content-top">
                                        <h3>Jessica Brown</h3>
                                        <span>28 Nov, 2020</span>
                                    </div><!-- /.blog-comment__content-top -->
                                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                        dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="#" class="thm-btn">Reply</a><!-- /.thm-btn -->
                                </div><!-- /.blog-comment__content -->
                            </div><!-- /.blog-comment__box -->
                        </div><!-- /.blog-comment -->
                        <div class="comment-form">
                            <h2>Leave a Comments</h2>

                            <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Email Address">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div><!-- /.col-lg-12 -->
                                    <div class="col-lg-12">
                                        <button type="submit" class="thm-btn">Submit Comment</button><!-- /.thm-btn -->
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form>
                        </div><!-- /.comment-form -->
                    </div><!-- /.col-md-12 col-lg-9 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar__search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="organik-icon-magnifying-glass"></i></button>
                                </form>
                            </div><!-- /.blog-sidebar__search -->
                            <div class="blog-sidebar__posts">
                                <h3>Recent Posts</h3>
                                <ul>
                                    <li>
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        <span>20 Nov, 2020</span>
                                        <h4><a href="news-details.html">Healthy Farm Diary
                                                Products</a></h4>
                                    </li>
                                    <li>
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        <span>20 Nov, 2020</span>
                                        <h4><a href="news-details.html">Healthy Farm Diary
                                                Products</a></h4>
                                    </li>
                                    <li>
                                        <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                        <span>20 Nov, 2020</span>
                                        <h4><a href="news-details.html">Healthy Farm Diary
                                                Products</a></h4>
                                    </li>
                                </ul>
                            </div><!-- /.blog-sidebar__posts -->
                            <div class="blog-sidebar__categories">
                                <h3>Catgories</h3>
                                <ul>
                                    <li>
                                        <a href="#">Agriculture <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">

                                            Organic Food <i class="fa fa-angle-right"></i></a>
                                    </li>

                                    <li>
                                        <a href="#">Dairy Farm <i class="fa fa-angle-right"></i></a>
                                    </li>

                                    <li>
                                        <a href="#">Economy Solution <i class="fa fa-angle-right"></i></a>
                                    </li>

                                    <li>
                                        <a href="#">Harvests Innovations <i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div><!-- /.blog-sidebar__categories -->
                            <div class="blog-sidebar__tags">
                                <h3>Tags</h3>
                                <div class="blog-sidebar__tags-links">
                                    <a href="#">Agriculture,</a>
                                    <a href="#">Food,</a>
                                    <a href="#">Healthy,</a>
                                    <a href="#">Dairy,</a>
                                    <a href="#">Organic,</a>
                                    <a href="#">Farm,</a>
                                    <a href="#">Economy</a>
                                </div><!-- /.blog-sidebar__tags-links -->
                            </div><!-- /.blog-sidebar__tags -->
                        </div><!-- /.blog-sidebar -->
                    </div><!-- /.col-md-12 col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

@endsection