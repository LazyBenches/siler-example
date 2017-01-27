# Siler Example
Keeping it simple, *stupid*!<br>
[github.com/leocavalcante/siler](https://github.com/leocavalcante/siler)

### Tip
@see [web/index.php](web/index.php)
@see [web/blog/index.php](web/blog/index.php)
@see [web/api/index.php](web/api/index.php)

### Note
How things fit naturally
- web / pages
- web / pages / home
- web / assets
- web / components
- web / blog / post
- web / api / users
- templates

**Isn't it the web?**<br>
IMO isn't about Models, Views and Controllers.<br>
But you can still see things this way:

| KISS | MVC |
| ---- | --- |
| * | models |
| templates | views |
| pages | controllers |
| components | HMVC (?) |

> *models usually abstracts persistent data, this example doesn't shows how to do it, but it is __KISS__ is plain old PHP, you can bring your fully-featured ORM or just use PDO. I personally enjoy [RedBean](http://www.redbeanphp.com/) its philosofy matches with Siler*

### Your Rules
Siler doesn't get on the way of your __business rules__. As you can see in [Calc.php](src/Service/Calc.php) and [CalcTest.php](tests/Service/CalcTest.php), your services can play around without any problems. `src` should be __your__ code, not 3th-party code.

Also, all the directory structure is up to you, Siler is vendor-only. This project doesn't aims to be a bootstrap/skeleton/framework, it is really an example. You can start with Siler from an empty dir and `composer require leocavalcante/siler`.

And is good to point that Siler does not have any dependencies, Twig and Dotenv is up to you to use.

You can report any issues if you want to discuss this KISS/Class-less/Just-run philosofy. If you found a bug, please, report at: https://github.com/leocavalcante/siler/issues
