<?php

$page->add_script (Appconf::swiftsearch ('Swiftsearch', 'embed_code'));

echo $tpl->render ('swiftsearch/form', array ());
