<?php
    include 'partials/header.php';

    component("hero.universal", $data->hero);
    component("services.3col-01", $data->services);
    component("aboutUs.2cols+3cols", $data->aboutUs);
    component("portfolio.masonry-skills", $data->portfolio);
    component("reference.default-slider", $data->reference);
    component("contact.default-icons-01", $data->contact);

    include 'partials/footer.php';
