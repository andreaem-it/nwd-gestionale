<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9xspxa6\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9xspxa6/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container9xspxa6.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container9xspxa6\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container9xspxa6\appDevDebugProjectContainer(array(
    'container.build_hash' => '9xspxa6',
    'container.build_id' => '0930ebab',
    'container.build_time' => 1538406432,
), __DIR__.\DIRECTORY_SEPARATOR.'Container9xspxa6');
