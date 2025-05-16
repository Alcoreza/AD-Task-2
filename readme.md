<a name="readme-top">

<br/>

<br />
<div align="center">
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">AD-Car-Hub</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
  A simple car showcase web project that demonstrates the use of functions, fragmentation, arrays, and dictionaries while utilizing a website design.
</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=Alcoreza/AD-Car-Hub)

[![wakatime](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8.svg)](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8)

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->

Car Hub is a simple web-based platform to display a list of cars by type and brand using PHP. It features reusable components, organized folder structure, and page-specific designs.

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

- Banner image sections per page
- Car cards (template components)
- Pages for Brands and Types
- Reusable header and footer components
- Utility files for data handling

### Technology

<!-- TODO: List of Technology Used -->

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code | Example |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal | Utility | Accoun.util.php |
   | Camel | Components and Pages | index.php or footer.component.php |
7. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
8. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
9. File Structure to follow below.

```
AD-TASK-2/
├── assets/
│   ├── css/
│   │   └── global.css
│   └── img/
│       ├── car1.jpg
│       ├── car2.jpg
│       ├── car3.jpg
│       ├── car4.jpg
│       ├── car5.jpg
│       ├── car6.jpg
│       ├── car7.jpg
│       ├── car8.jpg
│       ├── car9.jpg
│       ├── car10.jpg
│       └── landingpagebg.jpg
├── components/
│   ├── templates/
│   │   └── car-card.component.php
│   ├── footer.component.php
│   └── header.component.php
├── handlers/
│   └── car.handler.php
├── page/
│   ├── brands/
│   │   ├── assets/
│   │   │   ├── css/
│   │   │   │   └── brands.css
│   │   │   └── img/
│   │   │       └── brandsbg.jpg
│   │   └── index.php
│   └── type/
│       ├── assets/
│       │   ├── css/
│       │   │   └── types.css
│       │   └── img/
│       │       └── typesbg.jpg
│       └── index.php
├── utils/
│   └── Car.util.php
├── .dockerignore
├── .gitignore
├── bootstrap.php
├── composer.json
├── composer.lock
├── Dockerfile
├── index.php
├── readme.md
└── router.php

```

> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

| Title                         | Purpose                                                                      | Link                                                                                                                                                                                                                        |
| ----------------------------- | ---------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Coolors                       | Used for the color palette of the website.                                   | https://coolors.co/                                                                                                                                                                                                         |
| W3Schools                     | Served as a guide for both HTML and CSS structure as well as its attributes. | https://www.w3schools.com/html/ https://www.w3schools.com/css/                                                                                                                                                              |
| Model X Image                 | Used for the visual purposes of the car Model X.                             | https://www.topgear.com/sites/default/files/images/news-article/2015/09/7389b6d68c6379cfab453a934c1bf818/tesla3.jpg                                                                                                         |
| Mustang GT Image              | Used for the visual purposes of the car Mustang GT.                          | https://hips.hearstapps.com/hmg-prod/images/2019-ford-mustang-shelby-gt-s-lead2-1566224220.jpg                                                                                                                              |
| Civic Image                   | Used for the visual purposes of the car Civic.                               | https://www.topgear.com/sites/default/files/images/news-article/carousel/2020/01/e28a17efea351f06dab14e796239bb82/2020-honda-civic-type-r.jpg                                                                               |
| Corolla X Image               | Used for the visual purposes of the car Corolla.                             | https://vehicle-images.dealerinspire.com/98a7-110011527/5YFT4MCE3PP141855/69542343b45a3c1fed59c18702261836.jpg                                                                                                              |
| Wrangler Image                | Used for the visual purposes of the car Wrangler.                            | https://www.jeep-india.com/content/dam/cross-regional/apac/jeep/en_in/wrangler-price-reveal/gallery/Exterior-6-Website_Gallery-Page.jpg.img.1440.jpg                                                                        |
| i8 Image                      | Used for the visual purposes of the car i8.                                  | https://upload.wikimedia.org/wikipedia/commons/a/a5/BMW_i8_by_Japan_specification.jpg                                                                                                                                       |
| A4 Image                      | Used for the visual purposes of the car A4.                                  | https://www.topgear.com/sites/default/files/cars-car/image/2021/03/audiuk0002282120audi20a420saloon.jpg                                                                                                                     |
| Cybertruck Image              | Used for the visual purposes of the car Cybertruck.                          | https://www.motortrend.com/uploads/sites/5/2019/11/Tesla-Cybertruck-Electric-Pickup-Truck-Front-3-4-in-Motion-on-Road-Course.jpg                                                                                            |
| F-150 Raptor Image            | Used for the visual purposes of the car F-150 Raptor.                        | https://media.ford.com/content/fordmedia/fna/us/en/products/trucks/f-150/2021-f-150/jcr:content/content/media-section-parsys/media_section_3cac/media-section-parsys/textimage_ee11/image.img.951.535.jpg/1594220287585.jpg |
| Camaro Image                  | Used for the visual purposes of the car Camaro.                              | https://www.topgear.com/sites/default/files/cars-car/carousel/2019/01/2018-chevrolet-camaro-zl1-033.jpg                                                                                                                     |
| Landing Page Background Image | Used for the background image in the Landing Page.                           | https://images.hdqwalls.com/wallpapers/toyota-gr-supra-mkv-final-edition-sk.jpg                                                                                                                                             |
| Brands Page Background Image  | Used for the background image in the Brands Page.                            | https://images.hdqwalls.com/wallpapers/pagani-huayra-r-2024-sk.jpg                                                                                                                                                          |
| Types Page Background Image   | Used for the background image in the Types Page.                             | https://images.hdqwalls.com/wallpapers/porsche-962-lc.jpg                                                                                                                                                                   |
