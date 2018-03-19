<?php

namespace Sulu\Bundle\ProductBundle\Entity;

use Sulu\Component\Persistence\Model\AuditableInterface;
use Sulu\Component\Persistence\Model\AuditableTrait;

class Attribute extends \Sylius\Component\Product\Model\ProductAttribute implements AuditableInterface
{
    use AuditableTrait;
}
