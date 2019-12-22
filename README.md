# bthramverk1-weather

[![Build Status](https://travis-ci.org/EvilBengt/bthramverk1-weather.svg?branch=master)](https://travis-ci.org/EvilBengt/bthramverk1-weather)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/EvilBengt/bthramverk1-weather/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/EvilBengt/bthramverk1-weather/?branch=master)

[![Build Status](https://scrutinizer-ci.com/g/EvilBengt/bthramverk1-weather/badges/build.png?b=master)](https://scrutinizer-ci.com/g/EvilBengt/bthramverk1-weather/build-status/master)

[![Code Coverage](https://scrutinizer-ci.com/g/EvilBengt/bthramverk1-weather/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/EvilBengt/bthramverk1-weather/?branch=master)

Module for weather services.


## Installation

* Copy folders `/src`, `/config`, `/view` to the anax installation.
  If installed with composer, these files can be found in `[ANAX_INSTALL_PATH]/vendor/evilbengt/weather/`.
  If you have rsync installed, you may run the following commands from your anax install path to do this automatically:

  * `rsync -av vendor/evilbengt/weather/src/ src/`
  * `rsync -av vendor/evilbengt/weather/config/ config/`
  * `rsync -av vendor/evilbengt/weather/view/ view/`

* A sample config-file can be found in `[ANAX_INSTALL_PATH]/config/weather`.
  Rename `config_sample.txt` to `config.php` and replace any `API_KEY_GOES_HERE`
  with your corresponding key.

* The module's services is now accessible on `/weather` and `/weather/api`.
  See `/weather/api/doc` for documentation on how to use the API.

* To add the services to the navbar, you may use the sample-file `[ANAX_INSTALL_PATH]/config/navbar/weather-navbar-sample.txt`.
