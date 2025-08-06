## Запуск через Docker

З корневої папки проєкту виконайте команду: docker compose up --build

## Що відбуденться

- втановляться необзідні залежності
- мігрується база даних
- виконаються сідери:  user, categories та auth_client

Postman link (використовувати дестктоп версію, та обрати "local" environment):
https://zenapps.postman.co/workspace/OA-Blog-Test~96c6ecec-ecd9-4173-8f8c-63c84db36e39/collection/8844399-cee78215-85df-4ca0-9446-38c40adf9fb7?action=share&source=copy-link&creator=8844399

## Для зручності запуску через докер (звичайно що так не робиться на реальних проектах)

.env прибрав з гітігнору, розумію що так не робиться

storage/oauth-private.key та storage/oauth-private.key теж прибрав з гітігнору, щоб ключі які додав в
postman залишились незмінні:
{
"client_id": "2",
"client_secret": "3Bc2wflV3JHZbZ6egMuPvWIVv4LHcYCq3MyGVid8"
}

## Нотатки

До API ендпоінтів повинні бути застосовані відповідні хедерси (в постмені додані: Accept application/json)
щоб помилки валідаціїї відображались як json

Для створення, редагування, видалення постів потрібно влогінитись,
в постмені є ендпоінт {{url}}/api/login
