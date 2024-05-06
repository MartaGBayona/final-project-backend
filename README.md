<h1 align="center"> FINAL PROJECT BACKEND: GORGONEYE CINEMA ACADEMY </h1>

<p align="center">
  <img src="./public/img/gorgoneye cinema academy.gif" alt="Demostración de funcionalidad">
</p>


## Table of Contents :file_folder:

1. [Description :classical_building:](#description-classical_building)
2. [Stack :gear:](#stack-gear)
3. [Project :open_book:](#Project-open_book)
4. [Author :wave:](#author-wave)

---

## Description :classical_building:

Welcome to GameLobby, the ultimate hub for gamers to unite and play! 🎮 Dive into our dynamic social network tailored for gaming fans. Create custom gaming rooms linked to your favorite titles and spark conversations that evolve into epic multiplayer battles. Whether you're strategizing for the next raid or sharing tips for the latest release, GameLobby is your virtual playground for gaming greatness. Level up your social gaming experience today!

---

## Stack :gear:

<div align="center">
<img src= "https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
<img src= "https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
<img src= "https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white"/>
<img src= "https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white"/>
<img src= "https://img.shields.io/badge/GIT-E44C30?style=for-the-badge&logo=git&logoColor=white"/>
</div>

---

## Project :open_book:

<div align="center">
  <image src="./public/img/diagrama.png" alt="diagrama">
</div>

### 1 - Local Installation:

- Clone repository.
- Install all the dependencies on the project
```bash
  composer install
```
- Fill .env with data on .env.sample.
- Open docker container and MySql Workbench that you have created for the project with the data given into .env
- Create and fill the tables.
```bash
php artisan migrate --seed
```
- Launch the api for using the methods 
```bash
composer artisan serve
```

### 2 - Info to log

- Super_admin:

```json

  _id: 1,
  name: "SuperAdmin",
  email: "superadmin@superadmin.com",
  password: "admin1234",
  role: "super_admin"

```

- User:

```json

  _id: 2,
  name: "User",
  email: "user@user.com",
  password: "123456",
  role: "user"

```

### 2 - Enpoints:

1. Register and Login:

- Register:

```
localhost:8000/api/register
```

<image src="./public/img/register.png" alt="register">

- Login:

```
localhost:8000/api/login
```

<image src="./public/img/login.png" alt="login">


2. User:

- Get all users:

Only super_admin can get all users

```
localhost:8000/api/users
```

<image src="./public/img/getallusers.png" alt="GetAllUsers">

- Get profile:

Need user logging

```
localhost:8000/api/users/profile
```

<image src="./public/img/getuserprofile.png" alt="GetProfile">

- Delete user :

Only super_admin can delete users

<image src="./public/img/deleteuser.png" alt="DeleteUser">


3. Games:

- Get all games:

Need user logging

```
localhost:8000/api/games
```

<image src="./public/img/getallgames.png" alt="GetAllGames">

- Post game:

Only super_admin can post game

```
localhost:8000/api/games
```

<image src="./public/img/postgame.png" alt="PostGame">

- Put game:

Only super_admin can update game

```
localhost:8000/api/games/{id}
```

<image src="./public/img/putgame.png" alt="PutGame">

- Delete game:

Only super_admin can delete game

```
localhost:8000/api/games/{id}
```

<image src="./public/img/deletegame.png" alt="DeleteGame">


4. Rooms:

- Get all rooms:

Need user logging

```
localhost:8000/api/rooms
```

<image src="./public/img/getallrooms.png" alt="GetAllRooms">

- Post room:

Need user logging

```
localhost:8000/api/rooms
```

<image src="./public/img/postroom.png" alt="PostRoom">

- Put room:

Need user logging

```
localhost:8000/api/rooms/{id}
```

<image src="./public/img/putroom.png" alt="">

- Delete room:

Need user logging

```
localhost:8000/api/rooms/{id}
```

<image src="./public/img/deleteroom.png" alt="DeleteRoom">


5. Messages:

- Get all room messages: 

Need user logging

<image src="./public/img/getallroommessages.png" alt="GetAllRoomMessages">

- Get all my messages:

Need user logging

<image src="./public/img/getallmymessages.png" alt="GetAllMyMessages">

- Post message:

Need user logging

<image src="./public/img/postmessages.png" alt="PostMessage">

- Put message:

Need user logging

<image src="./public/img/putmessages.png" alt="PutMessage">

- Delete message:

Need user logging

<image src="./public/img/deletemessage.png" alt="DeleteMessage">


6. User-Room:

- Get user-room:

<image src="./public/img/getuserrooms.png" alt="GetUserRoom">

- Post user-room:

Need user logging

<image src="./public/img/postuserroom.png" alt="PostUserRoom">

- Delete user-room: 

<image src="./public/img/deleteuserroom.png" alt="DeleteUserRoom">

---

## Author :wave:



---

<div align="center">
<a href="#table-of-contents-file_folder">🔼 Back to top 🔼</a>
</div>