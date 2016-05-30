# This repository is deprecated and unmaintained

**For the official version head to [algolia/algoliasearch-nette](https://github.com/algolia/algoliasearch-nette).**

***

# AlgoliaSearch

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
    hosts: ... # array of hosts
    options: [cainfo : ..., curloptions : [...]] # array of options
```
