# project-manager

## Запуск и использование

Запуск производится через последовательность команд:

```bash
make dev-build
make dev-up
```
Для запуска команд внутри контейнера:

```bash
docker-compose run --rm <имя контейнера> <команда>

# Пример:
docker-compose run --rm manager-php-cli composer -v
```
Для продакшн сборки нужно установить переменные окружения:

```bash
REGISTRY_ADDRESS=registry IMAGE_TAG=0 make build-production
```
