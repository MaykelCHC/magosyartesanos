<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYj2YUNB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYj2YUNB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYj2YUNB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYj2YUNB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYj2YUNB\App_KernelDevDebugContainer([
    'container.build_hash' => 'Yj2YUNB',
    'container.build_id' => '14be7cb7',
    'container.build_time' => 1648854467,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYj2YUNB');