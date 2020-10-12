#!/bin/bash
lightgreen='\e[1;32m'
blue='\e[0;34'
cyan='\e[1;96m'
green='\e[0;34m'
okegreen='\033[92m'
lightgreen='\e[1;32m'
white='\e[1;37m'
red='\e[033;91m'
yellow='\e[033;93m'
PS3="Penetration Revolution]>"
mainmenu=("xfce" "mate" "LXDE" "KDE")
select opt in "${mainmenu[@]}"
do
case $opt in
"xfce")
echo -e "$red[*]$lightgreen INSTALLING XFCE4 !!"
apt install xfce4
apt install vnc4server
apt install tightvncserver
echo -e "$red[*]$lightgreen DONE INSTALL "
echo -e "$red[*]$lightgreen PLEASE WAIT CONFIGURE"
sleep 3
echo "xcfe4-session" >> ~/.vnc/xstartup
echo "$red[*]$yellow PLEASE WAIT SETUP DESKTOP"
read -p "ENTER NAME USER : " user;
vncserver 
vncserver -kill :1
vncpasswd
vncserver
echo -e "$red[*]$lightgreen DONE SETUP !!"
echo -e "$red[*]$lightgreen HOST : localhost"
echo -e "$red[*]$lightgreen port : 5901 or 1 "
;;

"mate")
echo -e "$red[*]$lightgreen INSTALLING MATE DESKTOP !!"
apt install mate
apt install vnc4server
apt install tightvncserver
echo -e "$red[*]$lightgreen DONE INSTALL "
echo -e "$red[*]$lightgreen PLEASE WAIT CONFIGURE"
sleep 3
echo "mate-session" >> ~/.vnc/xstartup
echo "$red[*]$yellow PLEASE WAIT SETUP DESKTOP"
read -p "ENTER NAME USER : " user;
vncserver
vncserver -kill :1
vncpasswd
vncserver
echo -e "$red[*]$lightgreen DONE SETUP !!"
echo -e "$red[*]$lightgreen HOST : localhost"
echo -e "$red[*]$lightgreen port : 5901 or 1 "
;;
"LXDE")
echo -e "$red[*]$lightgreen INSTALLING LXDE !!"
apt install lxde
apt install vnc4server
apt install tightvncserver
echo -e "$red[*]$lightgreen DONE INSTALL "
echo -e "$red[*]$lightgreen PLEASE WAIT CONFIGURE"
sleep 3
echo "lxde-session" >> ~/.vnc/xstartup
echo "$red[*]$yellow PLEASE WAIT SETUP DESKTOP"
read -p "ENTER NAME USER : " user;
vncserver
vncserver -kill :1
vncpasswd
vncserver
echo -e "$red[*]$lightgreen DONE SETUP !!"
echo -e "$red[*]$lightgreen HOST : localhost"
echo -e "$red[*]$lightgreen port : 5901 or 1 "
;;
"KDE")
echo -e "$red[*]$lightgreen INSTALLING KDE !!"
apt install kde
apt install vnc4server
apt install tightvncserver
echo -e "$red[*]$lightgreen DONE INSTALL "
echo -e "$red[*]$lightgreen PLEASE WAIT CONFIGURE"
sleep 3
echo "kde-session" >> ~/.vnc/xstartup
echo "$red[*]$yellow PLEASE WAIT SETUP DESKTOP"
read -p "ENTER NAME USER : " user;
adduser $user
vncserver
vncserver -kill :1
vncpasswd
vncserver
echo -e "$red[*]$lightgreen DONE SETUP !!"
echo -e "$red[*]$lightgreen HOST : localhost"
echo -e "$red[*]$lightgreen port : 5901 or 1 "
;;
*) echo invalid option;;
esac
done
