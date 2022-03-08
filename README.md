<div id="top"></div>



<!-- READ ME Template https://github.com/othneildrew/Best-README-Template -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies">
    <img src="img/branding/Logo.svg" alt="Logo" width="250" height="250">
  </a>

<h3 align="center">IT Carlow Clubs And Societies</h3>

  <p align="center">
    Website Project Scenario 2
    <br />
    <a href="https://demo.januszczeropski.com">View Demo</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Website ScreenShot][website-screenshot]](screenshot.png)

Here's a blank template to get started: To avoid retyping too much info. Do a search and replace with your text editor for the following: `github_username`, `repo_name`, `twitter_handle`, `linkedin_username`, `email_client`, `email`, `project_title`, `project_description`

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [Bootsrap v5.1.3](https://getbootstrap.com)
* [PHP 8.1](https://www.php.net/releases/8.1/en.php)
* [MariaDB](https://mariadb.org)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

This script is only for Educational purposes I would not recommend using it in Prod env.

### Prerequisites

You are required to install Webserver such as Apache2 with PHP 8 + MariaDB or MySQL Server for website to fully function.

* php + Webserver

Debian/Ubuntu
```sh
apt install apache2 php-common
```
RHEL/CentOS
```
yum install httpd php-common
```
Windows/Xampp
```
https://www.apachefriends.org/index.html
  ```

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies.git
   ```
2. Move File To Webserver Root
   ```sh
   cd IT-Carlow-Clubs-And-Societies* && mv * /webserver-root
   ```
3. Update MySQL Config `inc/db.inc.php`
   ```conf
    define('DB_USERNAME', '{YOUR-MySQL-USERNAME}');
    define('DB_PASSWORD', '{YOUR-Password}');
    define('DB_NAME', '{YOUR-DATABASE-NAME}');

   ```
4. Import SQL File Linux
   ```sh
   mysql -u {YOUR-MySQL-USERNAME} -p
   CREATE DATABASE {YOUR-DATABASE-NAME};
   mysql -u {YOUR-MySQL-USERNAME} -p {YOUR-DATABASE-NAME} < Project.sql
   ```

Or import Project.sql Manually to Windows

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

This script is using Template System.

HTML Template can be located in /template/ with mix of PHP Code

Php code can be included in /inc



<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Your Name - [@GoalTV_](https://twitter.com/GoalTV_) - c00176885@itcarlow.ie

Project Link: [https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies](https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies)

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/GoalTV/IT-Carlow-Clubs-And-Societies.svg?style=for-the-badge
[contributors-url]: https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/GoalTV/IT-Carlow-Clubs-And-Societies.svg?style=for-the-badge
[forks-url]: https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies/network/members
[stars-shield]: https://img.shields.io/github/stars/GoalTV/IT-Carlow-Clubs-And-Societies.svg?style=for-the-badge
[stars-url]: https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies/stargazers
[issues-shield]: https://img.shields.io/github/issues/GoalTV/IT-Carlow-Clubs-And-Societies.svg?style=for-the-badge
[issues-url]: https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies/issues
[license-shield]: https://img.shields.io/github/license/GoalTV/IT-Carlow-Clubs-And-Societies.svg?style=for-the-badge
[license-url]: https://github.com/GoalTV/IT-Carlow-Clubs-And-Societies/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/janusz-czeropski/
[website-screenshot]: screenshot.png
