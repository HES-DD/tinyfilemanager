<?php

const HRM_CONFIG = [ // für den CDN-Test-Link
    "cdn_domain" => "https://n.hirmercdn.de",

    "content_paths" => [ // Dateien innerhalb dieser Ordner haben den Copy/Paste-Link zum CDN
        FM_ROOT_PATH . "/hgg/content",
        FM_ROOT_PATH . "/hrm/content",
        FM_ROOT_PATH . "/eck/content"
    ],

    "folders_forbidden_to_modify" => [ // Bearbeitungssymbole sind für diese ausgeblendet (ausgeblendet! nicht secure!)
        "/hgg",
        "/hrm",
        "/eck",
        "/hgg/content",
        "/hgg/products",
        "/hrm/content",
        "/hrm/products",
        "/eck/content",
        "/eck/products"
    ]
];


//TODO: alphanumerisch klein keine Sonderzeichen aussser _-
