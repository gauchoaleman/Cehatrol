Task for CEHATROL TECHNOLOGY eG.

* Create Database mik using:
  'charset' => 'latin1',
  'collation' => 'latin1_swedish_ci',
* Update Database settings in
  * .env
  * config/database
    * Use
      'charset' => 'latin1',
      'collation' => 'latin1_swedish_ci',
* Migrate database
  * php artisan migrate
* Start Laravel server
  * php artisan serve or php artisan serve --port=port_number
* Show data script: show_data.html (located in public dir)
