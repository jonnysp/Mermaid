<?php
namespace Jonnysp\Mermaid\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

use Jonnysp\Mermaid\JonnyspMermaid;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(JonnyspMermaid::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['mermaid']),
        ];
    }
}
