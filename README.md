<a name="readme-top"></a>
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]




<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://istanbulwebtasarim.pro">
    <img src="https://istanbulwebtasarim.pro/images/istanbul-web-tasarim-logo.webp" alt="İstanbul Web Tasarım" style="width: 40%">
  </a>

<h3 align="center">Laravel Emoji Parser Package</h3>

[![Laravel][Laravel.com]][Laravel-url]
![Packagist Downloads (custom server)][downloads-url]


  <p align="center">
    A Laravel package for handling emoji expressions in blade files.
    <br />
    <a href="https://github.com/theposeidonas/laravel-emoji-parser"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/theposeidonas/laravel-emoji-parser/issues">Report Bug</a>
    ·
    <a href="https://github.com/theposeidonas/laravel-emoji-parser/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

## About The Project

**Laravel Emoji Parser** is a package for handling emoji expressions in Laravel projects. It parses emoji expressions in text, replacing them with the corresponding Unicode characters, allowing you to provide a user-friendly emoji experience in your Laravel applications.

Why you need it:
1. **Compatibility:** The Laravel Emoji Parser ensures consistent emoji rendering across different platforms and devices. It handles the conversion of emoji expressions to Unicode characters, promoting a standardized approach to emoji usage.

2. **Blade Integration:** Seamless integration with Laravel Blade allows you to easily incorporate emojis into your views and templates using simple directives, enhancing the simplicity of implementation.


By integrating Laravel Emoji Parser into your Laravel projects, you can effortlessly incorporate emojis into your application's text, providing a modern and enjoyable user experience. You can find the emoji lib under src/resources/emoji.json file.

<p align="right">(<a href="#readme-top">back to top</a>)</p>


## Getting Started

Once the package is successfully added to your project, it will be automatically loaded by Laravel's autoloader.

```bash
composer require theposeidonas/laravel-emoji-parser
```

## Usage

Laravel Emoji Parser can be integrated with Blade directives. You can use name, keyword or slug to find emojis. For example:

```php   
@emoji('heart')
```
or
```php   
@emoji('eye in speech bubble')
```
<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Contributing

If you find a bug or would like to contribute, please create an issue or submit a pull request. Your contributions are welcome!


<p align="right">(<a href="#readme-top">back to top</a>)</p>

## License

The Laravel Emoji Parser package is licensed under the MIT License. For more information, see the LICENSE file.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Baran Arda - [@theposeidonas](https://twitter.com/theposeidonas) - info@baranarda.com

Project Link: [https://github.com/theposeidonas/laravel-emoji-parser](https://github.com/theposeidonas/laravel-emoji-parser)

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/theposeidonas/laravel-emoji-parser.svg?style=for-the-badge
[contributors-url]: https://github.com/theposeidonas/laravel-emoji-parser/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/theposeidonas/laravel-emoji-parser.svg?style=for-the-badge
[forks-url]: https://github.com/theposeidonas/laravel-emoji-parser/network/members
[stars-shield]: https://img.shields.io/github/stars/theposeidonas/laravel-emoji-parser.svg?style=for-the-badge
[stars-url]: https://github.com/theposeidonas/laravel-emoji-parser/stargazers
[issues-shield]: https://img.shields.io/github/issues/theposeidonas/laravel-emoji-parser.svg?style=for-the-badge
[issues-url]: https://github.com/theposeidonas/laravel-emoji-parser/issues
[license-shield]: https://img.shields.io/github/license/theposeidonas/laravel-emoji-parser.svg?style=for-the-badge
[license-url]: https://github.com/theposeidonas/laravel-emoji-parser/blob/master/LICENSE
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/theposeidonas/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[downloads-url]: https://img.shields.io/packagist/dt/theposeidonas/laravel-emoji-parser?style=for-the-badge&color=007ec6&cacheSeconds=3600