<?php
    namespace ProcessWire;

    $pages = wire()->webengine->web_root_page->children();
    $pages = wire()->modules("webengine")->preparePagesForNavigation($pages);
    //bd($pages);
?>


<div style="padding: 2rem; background: tomato;">

    
    <ul>
        <?php foreach($pages as $page): ?>
            <a href="<?=$page->page_url?>"><?=$page->title?></a>
        <?php endforeach;?>
    </ul>
   

</div>