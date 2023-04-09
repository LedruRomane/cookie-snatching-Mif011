# Mif11 Ouverture Recherche

## Introduction

Ce projet est un projet de recherche en informatique. Il a pour but de démontrer l'importance de la protection de vos cookies par le biais d'un TP.

## Prérequis

 - **1 machine virtuelle** (avec [Docker](https://docs.docker.com/engine/install/) & [docker-compose](https://docs.docker.com/compose/install/)): Héberge le serveur web et le serveur de base de données
 - **2 stations de travail** (avec un navigateur Web): Victime & Attaquant

## Installation des services sur la VM

1. Clonez le projet sur le serveur :

```bash
git clone ...
```

2. Avec Docker & docker-compose installés, il suffit de lancer la commande suivante :

```bash
docker-compose up -d
```

3. Vérifiez l'accès au serveur web qui est accessible sur le port 80 de la VM.

```bash
Aller sur votre navigateur à cet URL: http://ip_vm/
```
PhpMyAdmin est également accessible sur le port 8000 de la VM, les accès sont les suivants :

```bash
Identifiant: user
Mot de passe: test
```


## Ressources

Lien vers -> [Google Doc du TP](https://docs.google.com/document/d/1uJk6Jnkp1navWkcDg3yJbstBLxPlHj2c7knMKPYGthM/edit?usp=sharing
)

Lien vers -> [Google Doc du script de la vidéo de vulgarisation](https://docs.google.com/document/d/1RQP2J7PCeq-XDGXTocGP7mOf1eyiQ4ohKV-i_nlr4qo/edit?usp=sharing)
