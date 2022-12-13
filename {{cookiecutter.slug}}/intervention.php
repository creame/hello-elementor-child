<?php

$is_woocommerce = false;

// Change footer label
$email = defined('CREAME_SUPPORT_EMAIL') ? CREAME_SUPPORT_EMAIL : 'i+{{cookiecutter.slug}}@crea.me';
$label = '<em><strong>Wordpress</strong> optimizado por <strong><a href="https://crea.me" style="' .
    'background:url(\'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAMAAADzN3VRAAAB7FB' .
    'MVEUAAAAAi00Uak1LTk1MTU1NTU1PTE1bRk1dSE1yOk1zOU17NU3YBk3aBU3bBU3hAU3uAE3/AE1NTU1TSk3YBk1MT' .
    'U1NTU2JLk2SKk3YBk1NTU2lIE3YBk3bBU1MTU1NTU1RS02YJ03XB03YBk2uG02nH03/AE3ZBk1NTU1IUE1NTU3YBk1' .
    'MTk1NTU3WB03YBk1KTk3YBk3YBk3YBk0AeE3YBk3YBk1gQ027FU1NTU1NTU3YBk3YBk3YBk3YBk3YBk0vXE3YBk1NT' .
    'U3YBk3YBk3YBk3ZBU1NTU3VCE3aBU3YBk3VCE3YBk3YBk3XBk3YBk3YBk1SS03YBk3YBk3YBk1NTU1NTU1NTU3YBk1' .
    'NTU1QS03YBk1tPU1NTU3YBk3XB03YBk3YBk1NTU3YBk3LDU3YBk1NTU3YBk1NTU3NDE1NTU3YBk3YBk3YBk1NTU1QT' .
    'E3YBk3YBk1XSE3YBk1NTU1NTU1NTU3YBk3YBk3YBk1NTU3YBk3YBk3gAk1PTE3YBk3YBk3YBk3WB03YBk3eA03JDU3' .
    'WB03YBk1NTU2/E03YBk1EUk3XB03YBk1NTU3YBk1EUk1JT01LTk1NTU1OTE1OTU1dRU1fRE2cJU3RCU3VB03WB03XB' .
    'k3YBk3ZBU3aBU3cBE3eA03hAU3///+NV4AIAAAAkHRSTlMAAAAAAAAAAAAAAAAAAAAAAAABAQECAgICAgMDAwMEBAQ' .
    'EBAQFBgYHCQoNDQ8PEBMVFxgfICEsLS8yNTU6Oz9AQUNFTE5PT1FWWFtgYWVnZ2ltb3B4fn+AgISGh42OlJiYmZ2fo' .
    'KGjo6aoqbG1ubq6wMnKyszT2Nve4uXm6u3v8vj5+vr6+/v7/Pz8/f39/v6XkcTvAAABfUlEQVR4AX3QA4MbQRTA8Sn' .
    'iV8Tm1E7N1HZT20htnRVzznfv9Envbez/en/LYa2TSdWcKMZ0NhttaqB4ihaTjKoCU+Fw69s7MpupSABarXfpltBtm' .
    'U7GTghxT2Zz65ZowcG5FXTLNn4e/rdJpmOy10I83yAzuTxmtQrAsm7/t0z2utyoYDJ3SIhfZ21arf3cg+ChlWcmB8c' .
    'fatYogdH7bkWE+Hn/2Mv5RBo/bjs/t9B5cYVzFaNvlB34lBIjubHowFAMf69/MtWHV8HBZBLJDj760RUfnZid7sXHu' .
    'zCd7tkLjEj66uX6Hft2v5uJpbHb/wV78AWJRNJny3xwDcMYw6N3sR//b68MlW7t6iskYbx8gVZ4hJUDDjfzcuMkhtN' .
    '4ilXiEKTzSfzwBul1x6vEAQF6S740duysEgMYvtO7MRnDXnwKVQJWONyD4XAsHMY//hohCvzFNE1f94C1Rog2X3r1/' .
    'tlpTnuslhwGkLJagaSWDJw7uENSVhuUYm1aBIKXbqRcHZAFAAAAAElFTkSuQmCC\') center right no-repeat;' .
    'background-size:auto 100%;padding:0 25px 4px 0;text-decoration:none;">Creame</a></strong> ' .
    'Soporte/incidencias: <a href="mailto:' . $email . '">' . $email . '</a></em>';

return [
  'application' => [
    'theme' => '{{cookiecutter.slug}}',
    'general' => [
      // 'site-title' => '{{cookiecutter.theme_name}}',
      // 'tagline' => 'Otro sitio de WordPress',
      // 'wp-address' => '{{cookiecutter.theme_uri}}/wp',
      // 'site-address' => '{{cookiecutter.theme_uri}}',
      'admin-email' => 'servicios+{{cookiecutter.project}}@crea.me',
      'membership' => false,
      'default-role' => $is_woocommerce ? 'customer' : 'author',
      'language' => 'es_ES',
      'timezone' => 'Europe/Madrid',
      // 'date-format' => 'j \\d\\e F \\d\\e Y',
      'time-format' => 'G:i',
      'week-starts' => 'Monday',
    ],
    'writing' => [
      'emoji' => false,
      'default-category' => 1,
      'default-post-format' => 'standard',
      'post-via-email.server' => 'mail.example.com',
      'post-via-email.login' => 'login@example.com',
      'post-via-email.pass' => 'password',
      'post-via-email.port' => 110,
      'post-via-email.default-category' => 1,
      'update-services' => '',
    ],
    // 'reading' => [
    //   'front-page' => 'posts',
    //   'front-page.page' => 0,
    //   'front-page.posts' => 0,
    //   'posts-per-page' => 10,
    //   'posts-per-rss' => 10,
    //   'rss-excerpt' => 'full',
    //   'discourage-search' => false,
    // ],
    'discussion' => [
      'post.ping-flag' => true,
      'post.ping-status' => true,
      'post.comments' => true,
      'comments.name-email' => true,
      'comments.registration' => true,
      'comments.close' => true,
      'comments.close.days' => 30,
      'comments.cookies' => true,
      'comments.thread' => true,
      'comments.thread.depth' => 5,
      'comments.pages' => true,
      'comments.pages.per-page' => 50,
      'comments.pages.default' => 'newest',
      'comments.order' => 'asc',
      'emails.comment' => true,
      'emails.moderation' => true,
      'moderation.approve-manual' => true,
      'moderation.approve-previous' => true,
      'moderation.queue-links' => 0,
      'moderation.queue-keys' => '',
      'moderation.disallowed-keys' => '',
      'avatars' => false,
      'avatars.rating' => 'G',
      'avatars.default' => 'mystery',
    ],
    'media' => [
      'sizes.thumbnail.width' => 150,
      'sizes.thumbnail.height' => 150,
      'sizes.thumbnail.crop' => true,
      'sizes.medium.width' => 300,
      'sizes.medium.height' => 300,
      'sizes.large.width' => 1024,
      'sizes.large.height' => 1024,
      'uploads.organize' => true,
      'mimes.svg' => true, // Allow upload SVGs.
    ],
    'permalinks' => [
      'structure' => '/%postname%/',
      'category-base' => 'categoria',
      'tag-base' => 'etiqueta',
    ],
  ],
  'wp-admin' => [
    'all' => [
      'common.adminbar.wp' => true,
      'common.adminbar.site.themes' => true,
      'common.adminbar.user.howdy' => true,
      'common.adminbar.user.profile' => true,
      'common.footer.credit' => $label,
      'dashboard.home.welcome' => true,
      'dashboard.home.news' => true,
      'posts.item.trackbacks' => true,
      'posts.item.custom-fields' => true,
      'posts.item.format' => true,
      'pages.item.author' => true,
      'pages.item.custom-fields' => true,
      'pages.item.discussion' => true,
    ],
    'all-not-administrator' => [
      'common.adminbar.updates' => true,
      'common.adminbar.theme' => true,
    ],
  ],
];