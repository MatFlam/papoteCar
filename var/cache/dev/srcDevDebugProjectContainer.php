<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCxvJURJ\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCxvJURJ/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCxvJURJ.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCxvJURJ\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerCxvJURJ\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'CxvJURJ',
    'container.build_id' => 'd0675622',
    'container.build_time' => 1524515708,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerCxvJURJ');
