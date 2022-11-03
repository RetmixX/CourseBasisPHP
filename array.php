<?php

$unknown =[
    "Test1"=>[
        "Test2"=>[
            "Test3"=>[
                "bruh1"=>"lmao1"
            ]
        ]
    ]
];

var_dump($unknown);

$unknown["Test1"]["Test2"]["Test3"][] = ["bruh2"=>"lmao1"];

var_dump($unknown);



