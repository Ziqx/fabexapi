# Fabex API
Build API's faster with several helpers

| Note: This package is mainly build to work with CodeIgniter 4

# Install the package

```sh
composer require ziqx/fabexapi
```

## Body Helper

```php

BodyHelper::generateBody($data);

```

## Authorization Helper

```php

AuthorizeAPI::authorizeAPIKey($request, $secret);

```


## Auth Token Helper

```php

AuthToken::getAuthJWTToken($request);

```