# AutoZipline

AutoZipline est une application Laravel permettant de visualiser des modèles de voitures en fonction des marques et modèles. Les utilisateurs peuvent créer un compte via une API et naviguer à travers une interface intuitive pour trouver les informations dont ils ont besoin.

## Table des matières

- [Fonctionnalités](#fonctionnalités)
- [Prérequis](#prérequis)
- [Installation](#installation)
- [Configuration](#configuration)
- [Utilisation](#utilisation)
- [API](#api)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Fonctionnalités

- Visualisation des modèles de voiture par marque
- Création et gestion de compte utilisateur via API
- Interface utilisateur intuitive et réactive
- Recherche avancée par marque et modèle

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants :

- PHP >= 8.0
- Composer
- Node.js et NPM
- Un serveur web comme Apache ou Nginx
- MySQL ou une autre base de données supportée par Laravel

## Installation

1. Clonez le repository :

    ```bash
    git clone https://github.com/votre-utilisateur/autozipline.git
    cd autozipline
    ```

2. Installez les dépendances PHP avec Composer :

    ```bash
    composer install
    ```

3. Installez les dépendances JavaScript avec NPM :

    ```bash
    npm install
    ```

4. Compilez les assets avec Laravel Mix :

    ```bash
    npm run dev
    ```

## Configuration

1. Copiez le fichier `.env.example` en `.env` :

    ```bash
    cp .env.example .env
    ```

2. Générez la clé de l'application :

    ```bash
    php artisan key:generate
    ```

3. Configurez la connexion à la base de données dans le fichier `.env` :

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_la_base_de_données
    DB_USERNAME=utilisateur
    DB_PASSWORD=mot_de_passe
    ```

4. Exécutez les migrations pour créer les tables nécessaires :

    ```bash
    php artisan migrate
    ```

5. (Optionnel) Exécutez les seeders pour peupler la base de données avec des données de test :

    ```bash
    php artisan db:seed
    ```

## Utilisation

1. Lancez le serveur de développement Laravel :

    ```bash
    php artisan serve
    ```

2. Ouvrez votre navigateur et accédez à `http://localhost:8000` pour voir l'application en action.

## API

### Création de compte utilisateur

- **URL:** `/api/register`
- **Méthode:** `POST`
- **Paramètres :**
  - `name` : string, requis
  - `email` : string, requis
  - `password` : string, requis
  - `password_confirmation` : string, requis

- **Réponse :**

  ```json
  {
      "message": "User registered successfully",
      "user": {
          "id": 1,
          "name": "John Doe",
          "email": "johndoe@example.com",
          "created_at": "2023-01-01T00:00:00.000000Z",
          "updated_at": "2023-01-01T00:00:00.000000Z"
      }
  }
