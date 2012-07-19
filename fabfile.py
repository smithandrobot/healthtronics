#import unipath

# Local
# empty database on staging: mysql -u <mysql user> -p<password> dump database <local database name>
# import database: mysql <local database name> -u <mysql user> -p<your pass> < /path/to/file.sql

# Staging
#
# logon dev - ssh Administrator@dev.healthtronics.smithandrobot.com
# mysql login: mysql -uroot -p sm1thr0b0t
# import database on staging: mysql -u root -pSup3rfr34k drupal_cms < /path/to/file.sql

# deploy to production: fab ec2 deploy
# deploy to staging: fab dev_deploy

# flush production : fab ec2 flush
# flush staging : fab flush
# ssh -i ~/.ssh/[keypair name] ec2-user@[ec2 instance ip]
# depoy to production fab ec2 deploy
from datetime import datetime, date, time
from fabric.api import *
from fabric.contrib import files, project
import os


env.roledefs = {
    'production'    : ['ec2-user@k12lab.com'],
    'dev'           : ['Administrator@dev.healthtronics.smithandrobot.com']
}

@roles('dev','production')
def uptime():
    run('uptime')

@roles('production')
def deploy():
    run('cd /var/www/healthtronics/healthtronics && git pull origin master')

@roles('dev')
def stage():
    run('cd /var/www/healthtronics/healthtronics && git pull origin dev')

