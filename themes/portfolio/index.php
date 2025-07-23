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
        <h1 class="exp-heading"><?php echo get_theme_mod('portfolio_experience_heading') ?></h1>
        <div class="card">
            <h2><?php echo get_theme_mod('portfolio_experience_jobtitle') ?></h2>
            <p><?php echo get_theme_mod('portfolio_experience_jobrole') ?></p>
        </div>
        <div>
            <?php
            $works = get_theme_mod('portfolio_experience_works');
            if (!empty($works)) {
                foreach ($works as $work) {
                    echo '<div class="project">
                                <a>' . $work['project-title'] . '</a>
                                <p class="role">Role: ' . $work['role'] . '</p>
                                <p>' . $work['description'] . '</p>
                                <ul class="list">
                            ';
                    $hightlights = explode("\n", $work['highlights']);
                    foreach ($hightlights as $point) {
                        if (!empty(trim($point))) {
                            echo '<li>' . esc_html($point) . '</li>';
                        }
                    }
                    echo '</ul></div>';
                }
            }
            ?>
        </div>
    </section>
</body>
</html>