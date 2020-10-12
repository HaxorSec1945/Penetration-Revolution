![alt text](https://raw.githubusercontent.com/mrcakil/Penetration-Revolution/master/tester.jpg)

# Penetration-Revolution
### Version : 1.1
### Author : Mrcakil
### Requirements : php, python, curl, git, ssh, ngrok

# Setup Configuration Ngrok Server 
#### Please find your authtoken folder/file example : /path/.ngrok2/ngrok.yml And Add
```
tunnels:
  First:
    proto: http
    addr: 80
  second:
    proto: tcp
    addr: 1337
```
#### Example :
```
authtoken: dzxxxxxx_xxxx
tunnels:
  First:
    proto: http
    addr: 80
  second:
    proto: tcp
    addr: 1337
```
#### Copy Your ngrok file to /usr/bin or /bin or /usr/local/bin
# Install :
```
$ git clone http://github.com/mrcakil/Penetration-Revolution
$ cd Penetration-Revolution
$ Bash penrev
```
### Enjoy!
### Bug ? Please Report issue or contact : mrcakil@programmer.net
