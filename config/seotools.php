<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Trucking 360 - Your Partner in Amazon Freight Success", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Trucking 360 is your dedicated partner for achieving Fantastic+ results in the Amazon Freight Partner (AFP) program. Contact us today for tailored solutions.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                'Amazon Freight Partner services',
                '24/7 trucking dispatch services',
                'Trucking safety solutions',
                'Driver scorecard analysis',
                'Fantastic Plus rating support',
                'Customized trucking reports',
                'Trucking compliance assistance',
                'Logistics optimization for AFPs',
                'Fleet management services',
                'Transportation management solutions',
                'AFP dispatch',
                'AFP dispatch service',
                'AFP operations',
                'Affordable dispatching service',
                'AFP hiring service',
                'AFP HR service',
                'AFP fleet service',
                'AFP management service',
                'AFP safety',
                'Real-time dispatch support',
                'Driver coaching programs',
                'Amazon performance criteria',
                'Safety-driven logistics',
                'Cost-efficient dispatching',
                'Proactive route planning',
                'Supply chain optimization',
                'Dedicated dispatch team',
                'Compliance with Amazon standards',
                'Logistics consulting services',
                'How to achieve Fantastic Plus rating in Amazon Freight Partner program',
                'Benefits of 24/7 dispatch services for trucking companies',
                'Customized safety solutions for Amazon Freight Partners',
                'Importance of driver scorecards in logistics management',
                'Cost-effective fleet management for trucking businesses',
                'Real-time dispatch support for Amazon delivery drivers',
                'Proactive planning to reduce trucking operational costs',
                'Ensuring compliance with Amazon\'s safety standards',
                'Optimizing supply chain for Amazon Freight operations',
                'Dedicated dispatch services for improved delivery efficiency',
            ],
            'canonical'    => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'index, follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        // 'webmaster_tags' => [
        //     'google'    => null,
        //     'bing'      => null,
        //     'alexa'     => null,
        //     'pinterest' => null,
        //     'yandex'    => null,
        //     'norton'    => null,
        // ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Trucking 360 - Your Partner in Amazon Freight Success', // set false to total remove
            'description' => 'Trucking 360 is your dedicated partner for achieving Fantastic+ results in the Amazon Freight Partner (AFP) program. Contact us today for tailored solutions.', // set false to total remove
            'url'         => 'current', // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Trucking 360', // set false to total remove
            'description' => 'Trucking 360 is your dedicated partner for achieving Fantastic+ results in the Amazon Freight Partner (AFP) program.', // set false to total remove
            'url'         => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
