# PHP Algorithms Playground

A structured PHP project for implementing and testing classic algorithm problems.

## 🛠 Usage

- Write your algorithms in `src/<Category>/`
- Write corresponding tests in `tests/<Category>/`
- Run PHPUnit for testing

## 🐳 Docker Setup

```bash
docker-compose build
docker-compose run php bash
vendor/bin/phpunit
