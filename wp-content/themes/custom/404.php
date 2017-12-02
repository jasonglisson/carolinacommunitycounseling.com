<?php get_header(); ?>
    <section id="mainContent">
        <div class="container">  
            <div class="row">
                <div class="col-sm-12">
                    <h3>404: Page not found!</h3>
                    <p style="font-weight:900;">Perhaps you can find what you are looking for in the list below:<br />
                        <ul>
                            <?php wp_list_pages('title_li=&exclude=999'); ?>
                        </ul>
                    </p>
                </div> <!-- col-sm-12 -->
            </div> <!-- row -->
        </div><!-- container -->
    </section>
<?php get_footer(); ?>