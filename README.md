 
 # KOLOURPAINT - PAINT OF WINDOWS XP
 
 ~~~bash
 sudo apt install kolourpaint
 ~~~
 
 # Fsearch 
 
 ~~~bash
 sudo add-apt-repository ppa:christian-boxdoerfer/fsearch-daily
 
 sudo apt update 
 
 sudo apt install fsearch-trunk
 ~~~
 
 ## Fedora
 
 ~~~bash
 sudo dnf install automake autoconf intltool libtool autoconf-archive pkgconfig glib2-devel gtk3-devel
 
 git clone https://github.com/cboxdoerfer/fsearch.git
 
 cd fsearch
 
 ./autogen.sh
 
 ./configure
 
 make && sudo make install
 ~~~
 
 # GIMP
 ~~~bash
 sudo apt install gimp
 ~~~
 
 # Krita
 ~~~bash
 sudo apt install krita
 ~~~
 
 # Guake Terminal
 ~~~bash
 sudo apt install guake
 ~~~
 
 # Gdebi - Install packages
 
 ~~~bash
 sudo apt install gdebi
 ~~~
 
 # Convert Video
 ~~~bash
 sudo add-apt-repository ppa:paul-climbing/ppa$ sudo apt-get update
 
 sudo apt-get install winff
 ~~~
 
 # Kazam - Video Recorder
 ~~~bash
 sudo apt install kazam
 ~~~
 
 # Shutter - Screenshot Tool
 ~~~bash
 sudo add-apt-repository -y ppa:linuxuprising/shutter
 
 sudo apt-get update
 
 sudo apt-get install -y shutter 
 ~~~
 
 # Geany - Text Editor
 ~~~bash
 sudo apt install geany
 ~~~
 
 # Notepadqq - Notepad++ Folk
 ~~~bash
 sudo add-apt-repository ppa:notepadqq-team/notepadqq

 sudo apt-get update

 sudo apt-get install notepadqq
 ~~~

 ## Arch Linux
 ~~~bash
 sudo pacman -S notepadqq
 ~~~
 
 ## OpenSUSE
 ~~~bash
 sudo zypper in notepadqq
 ~~~
 
 ## Nix users
 ~~~bash
 nix-env -i notepadqq
 ~~~
 
 # Video Editor
 ~~~bash
 sudo apt install pitivi
 
 sudo apt install flatpak
 flatpak remote-add --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo
 flatpak install flathub org.pitivi.Pitivi
 flatpak run org.pitivi.Pitivi//stable
 ~~~
 
 # Converseen
 ~~~bash
 sudo add-apt-repository ppa:ubuntuhandbook1/apps
 sudo apt-get update
 sudo apt-get install converseen
 ~~~
 
 # Dolphin
 ~~~bash
 sudo apt install dolphin
 ~~~
 
 # Visual Studio Code
 ~~~bash
 sudo apt install code
 ~~~
 
 # Multimedia Conversor
 ~~~bash
 sudo apt install handbrake
 ~~~
 
 # Hash
 ~~~bash
 sudo apt install gtkhash
 ~~~
 
 # Cheese - Web Cam
 ~~~bash
 sudo apt install cheese
 ~~~
 
 # WebCamoid - Web Cam
 ~~~bash
 sudo apt install webcamoid
 ~~~
