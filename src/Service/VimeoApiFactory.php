<?php

namespace Rcm\VimeoData\Service;

use Interop\Container\ContainerInterface;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class VimeoApiFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config')['components']['rcm']['VimeoComponent'];

        return new VimeoApi(
            $config['apiClient']['id'],
            $config['apiClient']['secret'],
            $config['apiClient']['accessToken']
        );
    }
}
