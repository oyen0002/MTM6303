<?php
/**
 * Front Page  Template 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage  MTM6303assignment
 */


get_header(); ?>

<body>

    <!-- Add your content of header -->
    <header>
        <nav class="navbar  navbar-fixed-top navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-uarr">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.html" title="">
                        <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./index.html" title="" class="active">Home</a></li>
                        <li><a href="./page.html" title=""> About</a></li>
                        <li><a href="./contact.html" title=""> Contact Us </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <div class="white-text-container background-image-container"
        style="background-image:  url('<?php echo get_stylesheet_directory_uri() ?>./assets/images/img-home.jpg')">
        <div class="opacity"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Posuere lorem Ipsum <?php echo get_the_title();?>
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                        amet consectetur adipiscing elit. </p>
                    <a href="./about.html" title="" class="btn btn-lg btn-primary">About Us</a>
                </div>

            </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>