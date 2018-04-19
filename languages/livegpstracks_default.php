<?php
/**
* English language file for NUT module
*
*/

$dictionary=array(

/* general */
'MAC_INFO'=>'The unique serial number of the device monitoring.',
'MAC_TEXT'=>"Designed to identify the device in the project and anchor it to the owner and to the map section sensors. It consists of 12-18 characters A-Z, and 0-9 are sometimes separated by '-' or ':'. To ensure the uniqueness of it is recommended to use the MAC-address of the network interface of your DEVICE monitor or a computer that can learn by doing getmac or ipconfig command prompt in Windows and ifconfig on Linux. Allowed to bind multiple Devices in different MAC to the same owner.",
'NAME_INFO'=>"The name of the monitoring devices (not required)",
'FOR_OUTDATA'=>"For transmission",
'FOR_INDATA'=>"For receive",
'RECEIVE'=>"Receive",
'SID_INFO'=>"Id device of links in http://narodmon.ru/ID balun on the map;",
'MACDEV_INFO'=>"The unique serial number of sensors connected to the device",
'MACDEV_TEXT'=>"Designed to identify the sensor in the project and linking them to the readings Device monitoring count. For popular sensors DS18x20 family of temperature it is 16 digits 0-F.
For sensors without their own serial numbers (eg analog) it is recommended to use the following for the correct mac auto-detect the type of data:
T1-T99 temperature, H1-H99 humidity, P1-P99 pressure, L1-L99 illumination, W1-W99 power, U1-U99 voltage, I1-I99 amperage, R1-R99 radiation, S1-S99 dry contact, RX / TX traffic, CO2 concentration.
You can specify the name of the mac as a sensor in the Latin alphabet characters and no spaces, but in this case will have to specify the data type manually in the section Sensors.
Registration of all sensors connected to the Device-vu, occurs automatically as soon as you send their readings to narodmon.ru.",
'DEVTITLE_INFO'=>"The names of sensors (not required)",
'DEVTITLE_TEXT'=>"An optional name for the transfer into the renaming of the sensor once. If this parameter is not empty, then the name of the sensor is changed to the server received from the device.",
'SEND_INFO'=>"If the check box is selected then the data from this sensor will be sent to the site"
/* end module names */

);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
} 
