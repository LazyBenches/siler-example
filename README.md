# Siler Example
Keeping it simple, *stupid*!

### Tip
Start @ [web/index.php](web/index.php)

### Notice
How things fit naturally
- web / pages
- web / pages / home
- web / assets
- web / components

Web isn't about Models, Views or Controllers. But you can still see things this way:

| KISS | MVC |
| ---- | --- |
| pages | controllers |
| templates | views |
| components | HMVC (?) |
| * | models |

*models usually abstracts persistent data, this example doesn't shows how to do it, but it is __KISS__ is plain old PHP, you can bring your fully-featured ORM or just use PDO. I personally enjoy RedBean its philosofy matches with Siler*
