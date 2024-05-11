<h1 align="center"> FINAL PROJECT BACKEND: GORGONEYE CINEMA ACADEMY </h1>

<p align="center">
  <img src="./public/img/gorgoneye cinema academy.gif" alt="Demostración de funcionalidad">
</p>


## Table of Contents :file_folder:

1. [Description :classical_building:](#description-classical_building)
2. [Stack :gear:](#stack-gear)
3. [Project :open_book:](#project-open_book)
4. [Future functionalities :star2:](#future-functionalities-star2)
5. [Author :wave:](#author-wave)
6. [Acknowledgments :sparkling_heart:](#acknowledgments--sparkling_heart)

---

## Description :classical_building:

Gorgoneye Cinema Academy is an online platform dedicated to providing free courses in the realm of film studies. Aspiring filmmakers and cinephiles alike can delve into a variety of courses covering topics such as the history of cinema and cinematographic techniques. Our platform aims to democratize access to film education, fostering a community where users can enhance their understanding of the art and craft of filmmaking from anywhere in the world.

Features:
- Free Courses: Gain access to a diverse range of courses without any cost barrier.
- User Registration: Register and create an account to enroll in courses and track your progress.
- History of Cinema: Explore the evolution of cinema through comprehensive historical lessons.
- Cinematographic Techniques: Learn the fundamentals and advanced techniques used in filmmaking.
- Interactive Learning: Engage with interactive content and multimedia resources to enhance your learning experience.
- Community Interaction: Connect with fellow film enthusiasts, share insights, and collaborate on projects.
- Accessible Anywhere, Anytime: Access courses and resources from the comfort of your home, on your schedule.

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
- Import file FinalProjectController.json on folder HTTP to thunderClient. Allow importing all endpoints in the backend.
- Project frontend: https://github.com/MartaGBayona/final-project-frontend.git

### 2 - Info to log

- Director:

```json
  name: "Director",
  email: "director@director.com",
  password: "123456",
  role: "director"
```

- Student:

```json
  name: "Alumno",
  email: "alumno@alumno.com",
  password: "123456",
  role: "student"
```

### 2 - Enpoints:

1. Register and Login:

- Register:

```
localhost:8000/api/auth/register
```

<image src="./public/img/register.png" alt="register">

- Login:

```
localhost:8000/api/auth/login
```

<image src="./public/img/Log.png" alt="login">

- LogOut:

```
localhost:8000/api/auth/logout
```

<image src="./public/img/LogOut.png" alt="logout">


2. User:

- Get all users:

Only director can get all users

```
localhost:8000/api/users
```

<image src="./public/img/GetAllUsers.png" alt="GetAllUsers">

- Get profile:

Need user logging

```
localhost:8000/api/users/profile
```

<image src="./public/img/GetProfile.png" alt="GetProfile">

- Get users by role:

Only director can get users by role

```
localhost:8000/api/users/roleId
```

<image src="./public/img/GetUsersByRole.png" alt="GetAllUsersByRole">

- Update User:

Can update name, surname, secondSurname and email

Need user logging

```
localhost:8000/api/users/userId
```

<image src="./public/img/UpdateUser.png" alt="UpdateProfile">

- Delete user :

Only director can delete users

```
localhost:8000/api/users/userId
```

<image src="./public/img/DeleteUser.png" alt="DeleteUser">


3. Courses:

- Get all courses:

```
localhost:8000/api/courses
```

<image src="./public/img/GetAllCourses.png" alt="GetAllCourses">

- Post Course:

Only director can post course

```
localhost:8000/api/courses
```

<image src="./public/img/postCourse.png" alt="PostCourse">

- Put course:

Only director can update course

```
localhost:8000/api/courses/courseId
```

<image src="./public/img/PutCourse.png" alt="PutCourse">

- Delete course:

Only director can delete course

```
localhost:8000/api/courses/courseId
```

<image src="./public/img/DeleteCourse.png" alt="DeleteCourse">

- Get course by Id:

```
localhost:8000/api/courses/courseId
```

<image src="./public/img/GetCourseById.png" alt="GetCourseById">


4. Subjects:

- Get all subjects:

```
localhost:8000/api/subjects
```

<image src="./public/img/GetAllSubjects.png" alt="GetAllSubjects">

- Post subject:

Only director can post subject

```
localhost:8000/api/courses/courseId/subjects
```

<image src="./public/img/PostSubject.png" alt="PostSubject">

- Put subject:

Only director can put subject

```
localhost:8000/api/subjects/subjectId
```

<image src="./public/img/PutSubject.png" alt="PutSubject">

- Get subject on course:

```
localhost:8000/api/courses/courseId/subjects
```

<image src="./public/img/GetSubjectsOnCOurse.png" alt="GetSubjectsOnCourse">

- Delete subject:

Only director can delete subject

```
localhost:8000/api/subjects/subjectId
```

<image src="./public/img/DeleteSubject.png" alt="DeleteSubject">

- Get subject by id:

```
localhost:8000/api/subjects/subjectId
```

<image src="./public/img/GetSubjectById.png" alt="GetSubjectById">

5. Inscriptions:

- Get all inscriptions:

Only director view all inscriptions

```
localhost:8000/api/inscriptions
```

<image src="./public/img/GetAllInscriptions.png" alt="GetAllInscriptions">

- Get my inscriptions:

Need user logging

```
localhost:8000/api/users/userId/inscriptions
```

<image src="./public/img/GetMyInscriptions.png" alt="GetMyInscriptions">

- Post inscription:

Need user logging

```
localhost:8000/api/courses/userId/inscriptions
```

<image src="./public/img/PostInscription.png" alt="PostInscription">


- Delete inscription:

```
localhost:8000/api/inscriptions/id
```

<image src="./public/img/DeleteInscription.png" alt="DeleteInscription">


## Future functionalities :star2:

- Generate endpoints to manage user files.

- Generate endpoints for managing teachers' evaluations of the files provided by students.

- Add more error validation in the controllers.

---

## Author :wave:

[GitHub](https://github.com/MartaGBayona) - [LinkedIn](https://www.linkedin.com/in/martagbayona/)

---

## Acknowledgments  :sparkling_heart:

My deepest gratitude to all my colleagues at GeeksHubs Academy.

---

<div align="center">
<a href="#table-of-contents-file_folder">🔼 Back to top 🔼</a>
</div>