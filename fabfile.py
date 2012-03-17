#import unipath

# Local
# empty database on staging: mysql -u <mysql user> -p<password> dump database <local database name>
# import database: mysql <local database name> -u <mysql user> -p<your pass> < /path/to/file.sql

# Staging
#
# logon staging ssh deply@srsc.us r0b0tsk1llz
# empty database on staging: mysql -u root -pSup3rfr34k dump database drupal_cms
# import database on staging: mysql -u root -pSup3rfr34k drupal_cms < /path/to/file.sql

# deploy to production: fab ec2 deploy
# deploy to staging: fab dev_deploy

# flush production : fab ec2 flush
# flush staging : fab flush
# ssh -i ~/.ssh/[keypair name] ec2-user@[ec2 instance ip]
# depoy to production fab ec2 deploy

from fabric.api import *
from fabric.contrib import files, project
import os


env.roledefs = {
    'production'    : ['ec2-user@k12lab.com'],
    'dev'           : ['Administrator@50.56.251.109'],
    'cache'         : ['ec2-user@ec2-75-101-253-121.compute-1.amazonaws.com']
}

def ec2():
    env.key_filename = os.path.join(os.getenv("HOME"), '.ssh', 'k12lab.pem')
    env.disable_known_hosts = True

@roles('dev','production')
def uptime():
    run('uptime')

@roles('production')
def deploy():
    run('cd /var/www/healthtronics/healthtronics && git pull origin master')

@roles('dev')
def dev_deploy():
    run('cd /var/www/healthtronics/healthtronics && git pull')

