# Kim's Starter Site #

## Installing

* npm install
* npm install gulp
* npm install bower
* bower install --save
* npm install --save

## Local Host

* Set up Laravel Homestead
* Download Virtualbox
* In Homestead.yaml under 'sites:' map a test url to your-site/public within the vagrant virtualbox
ex: sites: - map: your-site.test to: /home/vagrant/code/your-site/public
* If needed under 'databases:' in Homestead.yaml add a database with an appropriate name
* In terminal: sudo nano /etc/hosts (on a mac)
* Add your-site.test to the IP set in your homstead.yaml file
* In terminal, cd into your Homestead folder
* Run vagrant up
* Run vagrant provision

## Usage

Gulp serve - compile sass / browser sync

Gulp build - build project into dist folder (run before you push to the repo)

Gulp wiredep - looks at dependencies and updates npm install --savehtml file

## Flexbox Help

* Some examples: https://codepen.io/collection/XggOBP/
* CSS Tricks Flexbox Guide: https://css-tricks.com/snippets/css/a-guide-to-flexbox/