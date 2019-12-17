# bthramverk1-weather
Module for weather services.


## Installation

* Copy folders `/src`, `/config`, `/view`, `/test` to the anax installation.
  If installed with composer, these files can be found in `[ANAX_ROOT]/vendor/evilbengt/weather/`.

* A sample config-file can be found in `[ANAX_ROOT]/config/weather`.
  Rename `config_sample.txt` to `config.php` and replace any `API_KEY_GOES_HERE`
  with your corresponding key.

* The module's services is now accessible on `/weather` and `/weather/api`.
  See `/weather/api/doc` for documentation on how to use the API.

* To add the services to the navbar, you may use the sample-file `[ANAX_ROOT]/config/navbar/weather-navbar-sample.txt`.
