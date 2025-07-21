<section class="projects">
    <?php if( get_theme_mod('portfolio_hero_image')) : ?>
    <img src="<?php echo esc_url(get_theme_mod('portfolio_hero_image')) ?>" alt="image" class="header-img" />
    <?php endif ?>
    <div>
        <h2>Explore <span class="gray">The Projects</span> I Made</h2>
        <p class="desc">I have created several projects using the latest technologies and frameworks. This apps are fully functional and deployed over internet.</p>
    </div>

    <div class="card-group">
        <div class="card">
            <p>Fullstack</p>
            <h2>Fashion rental platform</h2>
            <p class="project-desc">Rent trending fashion without settling them permanently. Powered by laravel and php with razorpay integration</p>
        </div>
        <div class="card">
            <p>Fullstack</p>
            <h2>Conversy</h2>
            <p class="project-desc" >A customer support chatbot SaaS where AI powered bots serve your customer's queries 24/7. Built on NextJS and Postgres with Gemini 2.0.</p>
        </div>
        <div class="card">
            <p>Frontend</p>
            <h2>Zomato</h2>
            <p class="project-desc">Exact dummy of zomato's website. Built using html and css to learn the concepts of HTML and CSS</p>
        </div>
        <div class="card">
            <p>Fullstack</p>
            <h2>Blog</h2>
            <p class="project-desc" >A fullstack blogging wesbite. Integrated github signin and Sanity CMS to seamlessly write and publish blogs from admin panel.</p>
        </div>
        <div class="card">
            <p>Frontend</p>
            <h2>Netflix</h2>
            <p class="project-desc" >Exact dummy of netflix's website. Built using html and css to learn the concepts of HTML and CSS</p>
        </div>
        <div class="card">
            <p>API</p>
            <h2>Pokedex</h2>
            <p class="project-desc" >Used pokedex api to list all the pokemons and their information. The goal was to learn working with apis.</p>
        </div>
    </div>
</section>