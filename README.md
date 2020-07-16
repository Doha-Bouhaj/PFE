# Conception et développement d’un Feu Tricolore Intelligent
Ce projet représente une amélioration des Feux tricolores  traditionnels. 
Son objectif principal est le développement d’un système qui permet le contrôle des feux tricolores à distance.
<div>
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/z.PNG" width="250" height="170" />
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/x.PNG" width="250" height="170" />
</div>
<div>
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/a.PNG" width="250" height="170" />
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/a1.PNG" width="250" height="170" />
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/b.PNG" width="250" height="170" />
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/b1.PNG" width="250" height="170" />
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/c.PNG" width="250" height="170" />
</div>
<div>
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/d.PNG" width="250" height="170" />
<img src="https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/e.PNG" width="250" height="170" />
</div>

## Pour commencer

Tout d'abord ,Essayez d'installer tous les logiciels ou les bibliothèques nécessaires

### Pré-requis
Assurez-vous que vous avez installé toutes les conditions préalables suivantes sur votre machine de développement:

+ L'installation qui fait l'objet de ce tutoriel est réalisée sur un système Windows 10 Pro 64 bits.
+ Téléchargez et installez l'environnement de travail :
	+  Anaconda3                  
	+  python 3.6.10/OpenCV 4.1.1
	+  Wampserver 3.1.9
	+  Arduino Ide 1.8.13
	+  proteus 8 professional
	+  Sublime Text V3


### Installation 

Voici les références pour vous aider à installer l'environnement de travail :

+ Anaconda3						[download](https://download.cnet.com/Anaconda/2500-2649_4-10788051.html) | [install](https://www.datacamp.com/community/tutorials/installing-anaconda-windows?utm_source=adwords_ppc&utm_campaignid=10267161064&utm_adgroupid=102842301792&utm_device=c&utm_keyword=&utm_matchtype=b&utm_network=g&utm_adpostion=&utm_creative=278443377095&utm_targetid=dsa-429602503980&utm_loc_interest_ms=&utm_loc_physical_ms=1009974&gclid=Cj0KCQjw9b_4BRCMARIsADMUIyr2wrszcN2hYGYyme1K4BOONVsusKkLBsWQ3tgPcerzuoutjBBa6gQaAh2fEALw_wcB)
+ python 3.6.10/OpenCV 4.1.1	[download](https://download.cnet.com/Python/2500-2069_4-10080057.html) | [install]()
+ Wampserver 3.1.9				[download](https://download.cnet.com/WampServer/2500-10248_4-10797035.html) | [install OpenCv](https://docs.opencv.org/master/d5/de5/tutorial_py_setup_in_windows.html) | [install python 3.6.10](https://www.ics.uci.edu/~pattis/common/handouts/pythoneclipsejava/python.html)
+ Arduino Ide 1.8.13			[download](https://www.arduino.cc/en/Main/Donate) | [install](https://www.arduino.cc/en/main/software)
+ proteus 8 professional		[download](https://proteus.fr.malavida.com/#gref) | [install](https://www.theengineeringprojects.com/2016/05/install-download-proteus-software.html)
+ Sublime Text V3				[download](https://www.sublimetext.com/3) | [install](https://www.tutorialspoint.com/sublime_text/sublime_text_installation.htm)

## Démarrage

On a préparé le terrain jusqu'ici, maintenant procédez comme suit :

+ exécuter le fichier [Test.py](https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/projet/python/Test.py)
+ importer les 4 fichiers qui donnent le code python dans la carte sd
+ compiler le code arduino qui existe dans le fichier [python.ino](https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/projet/python/python.ino)
+ lancer la simulation avec proteus, le nom du fichier est [traffic.pdsprj](https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/projet/python/traffic.pdsprj)
+ Créer une nouvelle base de données appelée projet .Puis, exécuter [ce script](https://github.com/Doha-Bouhaj/PFE/blob/master/Feu%20Tricolore%20Intelligent/script/script.sql) SQL sur le serveur "MySQL".


## languages et FrameWorks

voici les langages et les frameworks utilisés dans ce projet :

+ Python 3.6.10/OpenCV 4.1.1
+ Arduino 1.8.13
+ HTML5, CSS3,Bootstrap 4.5.0
+ JavaScript, jQuery
+ PHP 7.2, MySQL ( avec tables relationnelles )

## Auteurs

+ Doha Bouhaj
+ Ghita Ghaffari
+ Soukaina El Kamel

## Remerciement 

Nous tenons à remercier vivement Mr El Habib Ben Lahmar ,Mme Fagroud Fatima Zahra ,et tous les professeurs et le personnel de la Faculté des Sciences Ben M’SIK .



