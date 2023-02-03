<?php
    include 'partials/header.php';

    component("hero.fullpage-02", $data->hero);
    component("services.3col-01", $data->services);
    component("aboutUs.2cols-counter", $data->aboutUs);
    customComponent("cooperation.antonovic", $data->cooperation);
    component("contact.default-icons-01", $data->contact);

    include 'partials/footer.php';
