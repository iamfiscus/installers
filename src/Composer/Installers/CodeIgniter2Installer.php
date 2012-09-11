<?php
namespace Composer\Installers;

class CodeIgniter1Installer extends BaseInstaller
{
    protected $locations = array(
		'library'     => 'ci/phoenix_app/libraries/{$name}/',
		'controller'  => 'ci/phoenix_app/controllers/{$name}/',
		'third-party' => 'ci/phoenix_app/third_party/{$name}/',
    );
}
