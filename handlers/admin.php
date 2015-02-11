<?php

// keep unauthorized users out
$this->require_acl ('admin', $this->app);

// set the layout and page title
$page->layout = 'admin';
$page->title = __ ('Swiftsearch');

// create the form
$form = new Form ('post', $this);

// set the form data from the app settings
$form->data = array (
    'embed_code' => Appconf::swiftsearch ('Swiftsearch', 'embed_code')
);

echo $form->handle (function ($form) {
    // merge the new values into the settings
    $merged = Appconf::merge ('swiftsearch', array (
        'Swiftsearch' => array (
            'embed_code' => $_POST['embed_code']
        )
    ));

    // save the settings to disk
    if (! Ini::write ($merged, 'conf/app.swiftsearch.' . ELEFANT_ENV . '.php')) {
        printf (
            '<p>%s</p>',
            __ ('Unable to save changes. Check your permissions and try again.')
        );
        return;
    }

    // redirect to the main admin page with a notification
    $form->controller->add_notification (__ ('Settings saved.'));
    $form->controller->redirect ('/swiftsearch/admin');
});
