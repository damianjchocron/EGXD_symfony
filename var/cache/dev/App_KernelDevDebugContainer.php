<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLHxc5WO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLHxc5WO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLHxc5WO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLHxc5WO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLHxc5WO\App_KernelDevDebugContainer([
    'container.build_hash' => 'LHxc5WO',
    'container.build_id' => '162fffcf',
    'container.build_time' => 1594399780,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLHxc5WO');
