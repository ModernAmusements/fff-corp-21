<?php

return function($kirby, $pages, $page) {

    $tag      = strip_tags(urldecode(param('tag')));
    $default  = option('kirby.blog.pagination.limit', 6);
    $limit    = $page->limit()->or($default)->toInt();
    $articles = collection('blog/articles');
    $alert = null;

    if (empty($tag) === false) {
        $articles = $articles->filterBy('tags', $tag, ',');
    }
   

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }
        $data = [
            'firstName'  => get('firstName'),
            'lastName'   => get('lastName'),
            'birthday'   => get('birthday'),
            'email'      => get('email'),
            'phoneNumber'=> get('phoneNumber'),
            'interests'  => get('interests'),
            'text'       => get('text')
        ];

       

        // some of the data is invalid
        if($invalid = invalid($data)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'noreply@info.de',
                    'replyTo'  => $data['email'],
                    'to'       => 'info@shady-tawfik.de',
                    'subject'  => esc($data['firstName']) . ' wants to work with you!',
                    'data'     => [
                        'sender'        => esc($data['firstName']),
                        'lastName'      => esc($data['lastName']),
                        'birthday'      => esc($data['birthday']),
                        'email'         => esc($data['email']),
                        'phoneNumber'   => esc($data['phoneNumber']),
                        'interests'     => esc($data['interests']),
                        'text'          => esc($data['text'])
                    ]
                ]);

            } catch (Exception $error) {
                $alert['error'] = "The form could not be sent";
            }

            // no exception occured, let's send a success message
            if (empty($alert) === true) {
                $success = 'Your message has been sent, thank you. We will get back to you soon!';
                $data = [];
            }
        }
    }

    return [
        'tag'      => $tag,
        'articles' => $articles->paginate($limit),
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];

};
