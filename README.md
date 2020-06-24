# ddev-google-bigquery

This is a very simple example how to access Google Cloud BigQuery with help
of its PHP-API by google/cloud-bigquery package incl. GRPC PHP Extension
in a DDev Container.

# Installation

Create or update a Service-Account in Google Cloud Console.
Add BigQuery Administrator rights to user.
Use existing or create new Service-Key-File [project-name]-[hash].json
Add this file to project root of this project and
rename it to GoogleCredentials.json. To be more safe you should
move that file to another location and update path in
`.ddev/docker-compose.environment.yaml`

`ddev start`

# For Developers

I have added a Dockerfile to `.ddev/web-build/` which uses the original
image of Drud and added the Pecl Extension `grpc` which was needed by
all these Google Packages to retrieve data by stream. Yes, it will need
some time, if you start DDev container the first time.

To prevent overriding the original www.conf file of DDev Container
I have added some special DPKG options to apt-get in Dockerfile.

In `.ddev/php` you will find the file to activate the GRPC
PHP Extension.

Please keep PHP Versions in Sync. If you modify PHP Version in
config.yaml of DDev, you also habe to update thie PHP Version in
`.ddev/web-build/Dockerfile`
