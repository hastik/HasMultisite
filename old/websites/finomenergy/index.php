<?php
    include 'partials/header.php';

    component("hero.fullpage-01", $data->hero);
    component("boxedWrap.fullwidth", $data->cons);
    customComponent("caseStudies.2colsModal", $data->caseStudies);
    component("benefits.3col-bgImage", $data->benefits);
    component("timeline.vertical", $data->timeline);
    customComponent("form.boxed", $data->form);
    customComponent("contact.simple", $data->contact);

    /*
        component(
            name: "contact.simple",
            data: $data->contact
            id: contact
        );
    */

    include 'partials/footer.php';
