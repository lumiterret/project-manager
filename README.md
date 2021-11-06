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
