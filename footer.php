<footer class="footer">
    <nav >
        <a href="index.html"></a>

        <?php
        wp_nav_menu(($arg = array(
            'menu_class' => 'footer-navigation',
            'theme_location' => 'footer'
        )))
        ?>

    </nav>
</footer>

<?php wp_footer() ?>

</body>

</html>