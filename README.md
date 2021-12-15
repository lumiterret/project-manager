# project-manager

## Запуск и использование

Запуск производится командой:

```bash
make init
```
Для запуска команд внутри контейнера:

```bash
docker-compose run --rm <имя контейнера> <команда>

# Пример:
docker-compose run --rm manager-php-cli composer -v

# установка дополнительных модулей node
docker-compose run --rm manager-node yarn add -s @coreui/coreui font-awesome perfect-scrollbar simple-line-icons
```
Для продакшн сборки нужно установить переменные окружения:

```bash
REGISTRY_ADDRESS=registry IMAGE_TAG=0 make build-production
```
Для доступа к сайту в девелоперском режиме с помощью фикстуры генерируется пользователь:
login: `admin@app.test`
pass: `password`
