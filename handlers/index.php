<?php

$page->title = __ ('Search');

$page->add_script (Appconf::swiftsearch ('Swiftsearch', 'embed_code'));

echo $tpl->render ('swiftsearch/index', array ());
