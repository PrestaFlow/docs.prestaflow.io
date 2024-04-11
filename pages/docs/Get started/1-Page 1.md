---
title: Frequently Asked Questions
menuTitle: FAQ
---

## How to set my PrestaShop in test mode ?

To enable the test mode on your PrestaShop, you will need to use the `_PS_IN_TEST_`  constant.

In order to allow you to enable it only while PrestaFlow will perform a test, you can
define it regarding the <strong>User Agent</strong>.

```php
if ($_SERVER['HTTP_USER_AGENT'] == 'PrestaFlow') {
  define('_PS_IN_TEST_', true);
}
```

Also, you will need to copy your <strong>img</strong> folder into the <strong>tests/Resources/img</strong> folder if it doesn't yet exists.

:::tip
### About the User-Agent
PrestaFlow allow you to set a generic **User-Agent** globally, for each suite and even each performed test !
:::
