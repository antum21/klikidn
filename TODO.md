# TODO

- [x] Update `docker-compose.yml` service `app` to pass DB env vars (DB_CONNECTION=mysql, DB_HOST=db, DB_PORT=3306, DB_DATABASE=klikidn, DB_USERNAME=root, DB_PASSWORD=...)

- [x] (Setelah edit) Jalankan `docker compose up --build`

- [x] Jalankan `php artisan migrate` untuk memastikan koneksi DB OK

- [x] (Opsional) verify koneksi lewat `php artisan tinker`
