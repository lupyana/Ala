# Gita
Platform to help spread and share musical Literature of African songs.

## Quick start

### Requirements

- [composer](https://getcomposer.org/)
- [laravel](https://www.laravel.com/docs/5.3/installation): >= 5.3
- [Redis](https://redis.io/)
- [yarn](https://yarnpkg.com/en/docs/install) (Optional)


### Getting started

- Install composer dependencies:	`$ composer install`

- Install nodejs dependencies:	`$ npm install`

- Setup Enviroment: Generate .env and edit to your Enviroment `cp .env.example .env
$php artisan key:generate`

- Migrations & Seeding: `$ php artisan migrate:refresh --seed`

- Use artisan command or apache to serve the app:	`$ php artisan serve`

## Documentation

> This is work in progress.

## Project Workflow

Our centralized workflow consists of these steps:

1. Pull to update your local develop

		$ git checkout develop

		$ git pull origin develop

2. Checkout a feature branch

		$ git checkout -b my_feature

3. Do work in your feature branch, committing early and often

		$ git add ./path/to/changes

		$ git commit -m "Commit early and often."

4. Rebase frequently to incorporate upstream changes.

		// Recall that `my_feature` is the active branch.
		// Run `git branch` to confirm.

		$ git fetch origin develop:develop

		$ git rebase origin/develop

5. Merge feature branch, push develop, and discard the feature branch.

		$ git checkout develop

		$ git merge my_feature

		$ git branch -d my_feature

		$ git push origin develop



## Contributing

> This is work in progress.

## Creators
Built with lots of coffee and code by

**Lupyana Mbembati**

- [@lupyana](https://github.com/lupyana)
