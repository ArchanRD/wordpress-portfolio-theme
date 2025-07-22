<?php
/** Base file which is responsible for rendering the theme */
?>
    <?php get_header(); ?>
    <!-- hero  -->
    <section class="hero">
        <h1 class="hero-heading"><?php echo get_theme_mod('portfolio_hero_text'); ?></h1>
        <div class="button-group">
            <?php if (get_theme_mod('portfolio_hero_button1')): ?>
                <a href="<?php echo esc_url(get_theme_mod('portfolio_hero_button1_url')) ?>"><button class="button blue"><?php echo get_theme_mod('portfolio_hero_button1') ?></button></a>
            <?php endif ?>
            <?php if (get_theme_mod('portfolio_hero_button2')): ?>
                <a href="<?php echo esc_url(get_theme_mod('portfolio_hero_button2_url')) ?>"><button class="button"><?php echo get_theme_mod('portfolio_hero_button2') ?></button></a>
            <?php endif ?>
        </div>
    </section>

    <!-- projects  -->
    <section class="projects">
        <?php if (get_theme_mod('portfolio_hero_image')): ?>
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

    <!-- experience -->
    <section class="exp">
        <h1 class="exp-heading">My Experience</h1>
        <div class="card">
            <h2>Freelance Software developer</h2>
            <p>Mission sustainability • Remote</p>
        </div>
        <div class="project">
            <a href="https://nimbleprocessing.nl/">Nimble</a>
            <p class="role">Role: Backend & DevOps</p>
            <p>Worked with a <strong>Netherlands</strong> based client who wants to revamp and improvise their digital presence. I contributed to the project as backend developer and handling devOPS side execution.</p>

            <ul class="list">
                <li>Created a schemas and api's on strapi backend.</li>
                <li>Added a compressor plugin to reduce image size and store in webp format.</li>
                <li>Deployed the website on AWS using EC2, RDS and S3.</li>
            </ul>
        </div>
        <div class="project">
            <a href="https://catchfoundation.in/">Catch Foundation</a>
            <p class="role">Role: Software developer</p>
            <p>Ahmedabad based <strong>NGO</strong> promoting cleanliness awareness in surrounding areas, fostering the growth of green landscapes within the city, and actively discouraging the use of single-use plastic.</p>

            <ul class="list">
                <li>Helped to improve website performamce.</li>
                <li>Feature: Developed a NagarVeer event registration form along with idCard and Certificate generation.</li>
                <li>Feature: Resubmit Activity on impact tracking app. This allows supervisors to monitor the content uploaded by groundstaff and ask them to resubmit if not perfect.</li>
            </ul>
        </div>
    </section>
</body>
</html>