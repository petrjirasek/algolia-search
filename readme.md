# AlgoliaSearch [UNDER DEVELOPMENT]

Implementation of [algolia/algoliasearch-client-php](https://github.com/algolia/algoliasearch-client-php) to Nette.


## Install

```sh
composer require petrjirasek/algolia-search
```

Register extensions in `config.neon`:

```yaml
extensions:
    algoliaSearch: petrjirasek\AlgoliaSearch\DI\AlgoliaSearchExtension
```


## Configuration

`config.neon` with default values

```yaml
algoliaSearch:
    applicationId: abc123 # application id
    apiKey: abc123 # api key
    prefix: dev_ # prefix of indices
    hosts: ... # array of hosts
    options: [cainfo : ..., curloptions : [...]] # array of options
```