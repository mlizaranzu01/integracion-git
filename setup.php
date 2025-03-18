<?php

function plugin_init_gitlab_integration() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['gitlab_integration'] = true;
    $PLUGIN_HOOKS['menu_toadd']['config'] = ['plugin_gitlab_integration_menu' => 'GitLab'];
}

function plugin_version_gitlab_integration() {
    return [
        'name'           => 'GitLab Integration',
        'version'        => '1.0.0',
        'author'         => 'Miguel Lizaranzu',
        'license'        => 'GPLv3',
        'homepage'       => 'https://github.com/tu_repo',//cambiar
        'minGlpiVersion' => '10.0',
    ];
}

function plugin_gitlab_integration_check_prerequisites() {
    return true;
}

function plugin_gitlab_integration_check_config() {
    return true;
}
