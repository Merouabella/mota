<footer>

<nav>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'container'      => 'false',
                'menu_class'     => 'cssFooter',
            )
        );
        ?>
        
       

</nav>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>