<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR5W15TO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR5W15TO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerR5W15TO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerR5W15TO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerR5W15TO\App_KernelDevDebugContainer([
    'container.build_hash' => 'R5W15TO',
    'container.build_id' => '143e4899',
    'container.build_time' => 1583492897,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR5W15TO');
