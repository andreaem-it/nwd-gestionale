<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEfjcdb7\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEfjcdb7/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEfjcdb7.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEfjcdb7\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerEfjcdb7\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Efjcdb7',
    'container.build_id' => '778a1ee4',
    'container.build_time' => 1540835418,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerEfjcdb7');
