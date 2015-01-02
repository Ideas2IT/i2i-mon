MYSQL Credentials : config.inc.php
Database Name : I2I_MON
Databse Dump : db/I2I_MON.sql
Modify Logo ,Header Copyright  : tpl/main.tpl.html
Logo Location       : img/

Add Cron Information via Terminal 
    crontab -e
    */2 * * * *  curl http://localhost/monitor/cron/status.cron.php > /dev/null >2&1
    service cron restart

Email Tempalte Location : lang/en.lang.php
    'notifications'=>'off_email_body' 

SMTP Configuration : classes/sm/smUpdaterStatus.class.php
    notifyByEmail

