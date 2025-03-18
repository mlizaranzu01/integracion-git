<?php

function plugin_gitlab_integration_menu() {
    return [
        'title' => 'Integración GitLab',
        'page'  => '/plugins/gitlab_integration/front/gitlab_info.php',
        'icon'  => 'fas fa-code-branch'
    ];
}
