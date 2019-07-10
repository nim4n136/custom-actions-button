Custom Actions Button
======
[![StyleCI](https://github.styleci.io/repos/196005846/shield?branch=master)](https://github.styleci.io/repos/196005846)

### Screenshots
![custom-action-button](https://user-images.githubusercontent.com/23657262/60898926-d04b5180-a293-11e9-8660-b5ce4d7886ec.PNG)

### Installation
```
composer require nim4n/custom-actions-button
```

### Configuration
In the configuration section of the file config/admin.php extension, add the configuration of this extension.
```php

  'extensions' => [

      'custom-actions-button' => [

          "enable" => true,

          "view" => [
              "label" => "Detail",
              "icon"  => "fa fa-eye",
              "class" => "btn btn-sm btn-info"
          ],

          "edit" => [
              "label" => "Edit",
              "icon"  => "fa fa-edit",
              "class" => "btn btn-sm btn-warning"
          ],

          "delete" => [
              "label" => "",
              "icon"  => "fa fa-trash",
              "class" => "btn btn-sm btn-danger"
          ]

      ]

  ],

```
License
------------
Licensed under [The MIT License (MIT)](LICENSE).
