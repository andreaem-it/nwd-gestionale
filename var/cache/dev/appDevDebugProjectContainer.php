<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK3n6foi\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK3n6foi/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerK3n6foi.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerK3n6foi\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerK3n6foi\appDevDebugProjectContainer(array(
    'container.build_hash' => 'K3n6foi',
    'container.build_id' => '9d050cf3',
    'container.build_time' => 1537861404,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerK3n6foi');
