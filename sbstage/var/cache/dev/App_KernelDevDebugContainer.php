<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVccCin4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVccCin4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVccCin4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVccCin4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVccCin4\App_KernelDevDebugContainer([
    'container.build_hash' => 'VccCin4',
    'container.build_id' => 'f29a1596',
    'container.build_time' => 1665515199,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVccCin4');
