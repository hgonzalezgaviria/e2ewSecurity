#! /bin/bash
# -*- ENCODING: UTF-8 -*-
# Nos colocamos en el directorio de nuestro usuario 
true > /u01/app/hbuser/product/e2ew/logs/e2eworks.log
true > /u01/app/hbuser/product/e2ew/logs/eai/E2EW_EAI.log
true > /u01/app/hbuser/product/e2ew/logs/eic/E2EW_EICW.log
true > /u01/app/hbuser/product/e2ew/logs/emr/E2EW_EMR.log
#truncate -s 0 /u01/app/hbuser/product/e2ew/logs/eai/E2EW_EAI-05-21-2019.log
echo Clean Logs e2ew
#whoami
