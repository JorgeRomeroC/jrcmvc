<?php
function headerAdmin()
{
    $view_header = 'Views/Template/header.php';
    require_once ($view_header);
}
function footerAdmin()
{
    $view_footer = 'Views/Template/footer.php';
    require_once ($view_footer);
}