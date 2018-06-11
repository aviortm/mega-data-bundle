# mega-data-bundle

## Installation
1. add to you composer.json file repositories section:


```
{
   "type": "git",
   "url": "git@github.com:aviortm/mega-data-bundle.git"
}
``` 

2. run command:
```
composer require aviortm/mega-data
```

## Configuration:
You can set base url for mega data
for example:
```
mega_data:
    base_url: http://localhost
```    

## Usage example

```php
<?php

namespace App\Controller;

use MegaDataBundle\Interaction\ProtocolInterface;
use MegaDataBundle\Operation\Locations\Get\Dto\Request\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Service extends Controller
{
    /**
     * @var ProtocolInterface
     */
    private $megaDataProtocol;

    /**
     * @param ProtocolInterface $megaDataProtocol
     */
    public function __construct(ProtocolInterface $megaDataProtocol)
    {
        $this->megaDataProtocol = $megaDataProtocol;
    }

    public function test()
    {
        $request = $this->megaDataProtocol->locations(new Request());
    }
}

```