# bthramverk1-weather
Module for weather services.


## Installation

* Copy folders `/src`, `/config`, `/view` to the anax installation.
  If installed with composer, these files can be found in `[ANAX_INSTALL_PATH]/vendor/evilbengt/weather/`.
  If you have rsync installed, you may run the following commands from your anax install path to do this automatically:

  * `rsync -av vendor/evilbengt/modul/src src/`
  * `rsync -av vendor/evilbengt/modul/config config/`
  * `rsync -av vendor/evilbengt/modul/view view/`

* A sample config-file can be found in `[ANAX_INSTALL_PATH]/config/weather`.
  Rename `config_sample.txt` to `config.php` and replace any `API_KEY_GOES_HERE`
  with your corresponding key.

* The module's services is now accessible on `/weather` and `/weather/api`.
  See `/weather/api/doc` for documentation on how to use the API.

* To add the services to the navbar, you may use the sample-file `[ANAX_INSTALL_PATH]/config/navbar/weather-navbar-sample.txt`.
