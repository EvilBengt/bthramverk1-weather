<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Väder",
            "url" => "weather",
            "title" => "Senaste månadens, dagens och kommande tidens väder",
            "submenu" => [
                "items" => [
                    [
                        "text" => "API-instruktioner",
                        "url" => "weather/api/doc",
                        "title" => "Instruktioner för hur man använder väder-API:t."
                    ]
                ]
            ]
        ],
    ],
];
