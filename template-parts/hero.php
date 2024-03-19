<?php
$args = array(
    'post_type' => 'photos', // Type de publication : articles
    'posts_per_page' => 1, // Nombre d'articles à afficher
    'orderby' => 'rand', // Tri aléatoire
);

$random_posts_query = new WP_Query($args);

if ($random_posts_query->have_posts()) {
    while ($random_posts_query->have_posts()) {
        $random_posts_query->the_post();

        // Affichage du titre de l'article
        the_title('<h2>', '</h2>');

        // Affichage de l'image en vedette de l'article
        if (has_post_thumbnail()) {
            the_post_thumbnail('large');
        } else {
            echo 'Aucune image en vedette';
        }

        echo '<p>PHOTOGRAPH EVENT</p>'; // Titre supplémentaire pour chaque photo

        // Autres contenus de l'article
        the_excerpt();
    }
} else {
    echo 'Aucun article trouvé.';
}

?>