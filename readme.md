# YourMusicList
 
"YourMusicList" is a webapplication of sharing Youtube playlist like a SNS with laravel, vue, mysql and Youtube Data Api v3.
 
# DEMO
 
You can share your youtube playlists at "SHARE" tab. First, input your playlist title to textfield. Then you push the "submit" button, your playlist is shared to users in Follows tab.

# Features
 
This webapplication was created to sharing your music playlists to your friend and those who people like music and seeking new favolite one. I created a timeline like a SNS to make it easier to share playlists. This project is not yet finished, but I'm going to create homedesign, authentication function include registration your youtube channelID, and edit your profiel function. 

# Requirement
 
* PHP 7.3.9
* Laravel Framework 5.7.29
* @vue/cli 4.3.1
* node v13.12.0
* npm 6.14.4
* youtube data api
 
# Installation
 
Install PHP with yum command.
 
```bash
sudo wget https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
sudo rpm -ivh epel-release-latest-7.noarch.rpm
sudo yum install -y http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
sudo yum -y install yum-utils
sudo yum-config-manager --enable remi-php73
sudo yum install -y php73 php73-php php73-php-mysql php73-php-php-mysqlnd php73-php-bcmath php73-php-ctype php73-php-json php73-php-mbstring php73-php-openssl php73-php-PDO php73-php-tokenizer php73-php-xml gcc
```

Install Composer and laravel with yum command.

```bash
sudo yum install composer
composer global require laravel/installer
composer create-project --prefer-dist laravel/laravel mazaiproject "5.7.*"
```

Install vue with  curl command and git clone.

```bash
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash
source ~/.bashrc
sudo git clone https://github.com/mazai0510/YourMusicList.git
sudo npm install
```



# Usage
 
Please create .env file due to use a database.
And create your api key at Google developer console to use Youtube data api v3.

Initialize database

```bash
php artisan migrate
php artisan db:seed
```
 
Compile vue components
 
```bash
npm run dev
```

Run php searver

```bash
php artisan serve
```


 
# Note
 
This webapplication is not yet complete.
 
# Author
 
* SougoHamamura

Thank you!