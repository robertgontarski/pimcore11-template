# Pimcore Project Skeleton

Empty skeleton pimcore with Vite + Typescript + Scss + Bootstrap

## Getting started
```bash
docker compose exec php vendor/bin/pimcore-install --mysql-host-socket=db --mysql-username=pimcore --mysql-password=pimcore --mysql-database=pimcore

docker exec -it -w /var/www/html/frontend php npm install

# watch ts/scss files
docker exec -it -w /var/www/html/frontend php npm run watch
```

