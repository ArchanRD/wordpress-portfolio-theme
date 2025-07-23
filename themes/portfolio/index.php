<?php
/** Base file which is responsible for rendering the theme */
$projects = get_theme_mod('portfolio_project_cards');
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
            <?php if (get_theme_mod('portfolio_project_heading')): ?>
            <h2><?php echo get_theme_mod('portfolio_project_heading') ?></h2>
            <?php endif; ?>
            <?php if (get_theme_mod('portfolio_project_subheading')): ?>
            <p class="desc"><?php echo get_theme_mod('portfolio_project_subheading') ?></p>
            <?php endif; ?>
        </div>

        <div class="card-group">
            <?php
            if (!empty($projects)) {
                foreach ($projects as $project) {
                    echo '<div class="card">
                            <p>' . $project['tag'] . '</p>
                            <h2>' . $project['title'] . '</h2>
                            <p class="project-desc">' . $project['description'] . '</p>
                        </div>';
                }
            }
            ?>
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