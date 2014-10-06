<?php

/**
 * @link https://github.com/mrbirne/cms2
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * 
 * @author Maurice Busch <busch.maurice@gmx.net>
 */

return [
    ['label' => 'Verein',
        'items' => [
            ['label' => 'Mitgliedschaft', 'url' => ['/site/page', 'view' => 'index']],
            ['label' => 'Vorstand', 'url' => ['/site/page', 'view' => 'board']],
            ['label' => 'Über uns', 'url' => ['/site/page', 'view' => 'test']],
            ['label' => 'Geschichte', 'url' => ['/site/page', 'view' => 'test']],
        ],
    ],
    ['label' => 'Training', 'url' => ['/site/page', 'view' => 'text']],
    ['label' => 'Karate', 'url' => ['/site/page', 'view' => 'karate']],
    ['label' => 'Bilder', 'url' => ['/site/page', 'view' => 'tst']],
    ['label' => 'Aktuelles', 'url' => ['/site/page', 'view' => 'test']],
    ['label' => 'Termine', 'url' => ['/site/page', 'view' => 'test']],
    ['label' => 'Kontakt', 'url' => ['/site/page', 'view' => 'test']],
];
