<?php

function portfolio($derivative = false){

  $dir = get_stylesheet_directory_uri() . '/dist/media/portfolio/';


  return [
    [
      "title" => 'LDS Architects UK',
      "image" => $dir . 'lds-uk.png',
      "url" => "https://www.lds-uk.com",
      "tech" => [
        "WordPress",
        "React",
        "AWS Cloudfront CDN"
      ]
    ],
    [
      "title" => 'DWD',
      "image" => $dir . 'dwd.png',
      "url" => "https://www.dwdllp.com",
      "tech" => [
        "WordPress",
        "AWS Cloudfront CDN"
      ]
    ],
    [
      "title" => 'Celadin',
      "image" => $dir . 'celadin.png',
      "url" => "https://celadin.com",
      "tech" => [
        "WordPress",
        "AWS Cloudfront CDN"
      ]
    ],
    [
      "title" => 'Skilla UK',
      "image" => $dir . 'skilla-uk.png',
      "url" => "https://www.skilla.co.uk/",
      "tech" => [
        "SVG",
        "WordPress"
      ]
    ],
    [
      "title" => 'Zero Carbon Project Market',
      "image" => $dir . 'zcp-market.png',
      "url" => "https://market.zerocarbonproject.com",
      "tech" => [
        "Laravel",
        "React"
      ]
    ],
    [
      "title" => 'Niikiis Launchpad',
      "image" => $dir . 'niikiis.png',
      "url" => "http://www.niikiis.com/launchpad/",
      "tech" => [
        "SVG",
        "Framework-less"
      ]
    ],
    [
      "title" => 'Cantillon',
      "image" => $dir . 'cantillon.png',
      "url" => "https://www.cantillon.co.uk/",
      "tech" => [
        "WordPress"
      ]
    ],
    [
      "title" => 'WiTT Group',
      "image" => $dir . 'witt.png',
      "url" => "https://www.wittgroup.org/",
      "tech" => [
        "WordPress"
      ]
    ],
    [
      "title" => 'Sir Arthur Sullivan Society',
      "image" => $dir . 'sullivan-society.png',
      "url" => "https://sullivansociety.org.uk/",
      "tech" => [
        "SVG",
        "WordPress",
        "AWS Cloudfront CDN"
      ]
    ],
    /*[
      "title" => 'Alaris Corporate Finance',
      "image" => $dir . 'alaris.png',
      "url" => "https://www.alariscf.co.uk/",
      "tech" => [
        "WordPress"
      ]
    ],*/
    [
      "title" => 'Ealing Soup Kitchen',
      "image" => $dir . 'ealing-soup-kitchen.png',
      "url" => "https://www.ealingsoupkitchen.org/",
      "tech" => [
        "WordPress"
      ]
    ],
    [
      "title" => 'trust-hub',
      "image" => $dir . 'trust-hub.png',
      "url" => "https://www.trust-hub.com/",
      "tech" => [
        "WordPress",
        "HubSpot"
      ]
    ],
    [
      "title" => 'Now|Comms',
      "image" => $dir . 'nowcomms.png',
      "url" => "https://www.nowcomms.com/",
      "tech" => [
        "WordPress",
        "AWS Cloudfront CDN",
        "Algolia"
      ]
    ],
    [
      "title" => 'Toucantainers',
      "image" => $dir . 'toucantainers.png',
      "url" => "https://toucantainers.com/",
      "tech" => [
        "WordPress",
        "WooCommerce"
      ]
    ],
    [
      "title" => 'Beond',
      "image" => $dir . 'beond.png',
      "url" => "https://beondgroup.com/our-services/public-sector/",
      "tech" => [
        "SVG",
        "WordPress"
      ]
    ],
    [
      "title" => 'hivertech',
      "image" => $dir . 'hiver.png',
      "url" => "https://www.hivertech.com/home",
      "tech" => [
        "SVG",
        "HubSpot"
      ]
    ],
    [
      "title" => 'rankr',
      "image" => $dir . 'nowrankr.png',
      "url" => "https://www.nowrankr.com/",
      "tech" => [
        "React",
        "AWS Lambda",
        "AWS DynamoDB",
        "AWS AppSync"
      ]
    ]
    /*[
      "title" => 'What Would You Do?',
      "image" => $dir . 'wwyd.png',
      "url" => "https://www.wwyd.games/",
      "tech" => [
        "WordPress",
        "Sass"
      ]
    ]*/
  ];

}