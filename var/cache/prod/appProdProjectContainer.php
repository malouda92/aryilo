<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLas8xfx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLas8xfx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerLas8xfx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerLas8xfx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerLas8xfx\appProdProjectContainer([
    'container.build_hash' => 'Las8xfx',
    'container.build_id' => '7f1e772c',
    'container.build_time' => 1612971420,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLas8xfx');
