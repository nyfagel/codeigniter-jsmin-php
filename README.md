# CodeIgniter JSMin Spark

This is a CodeIgniter Spark that provides jsmin.php, a PHP implementation of Douglas Crockford's JSMin by Ryan Grove, inspired by the ``minify`` spark by Jens Segers.

## Usage

### As a spark

First, install the spark by running

    $ php tools/spark install jsmin

Then, in your code:

```
$this->load->spark('jsmin/1.0.3');

$minified = JSMin::minify($source);
```

### Directly into your project
First, install it by copying ``libraries/jsmin.php`` into ``application/libraries``.

```
$this->load->library('jsmin');

$minified = JSMin::minify($source);
```

## Alternatives

An alternative to this library is the CodeIgniter driver spark by Jens Segers which inspired this one: [github.com/jenssegers/CodeIgniter-Minify](https://github.com/jenssegers/CodeIgniter-Minify).

## References

* [github.com/rgrove/jsmin-php](https://github.com/rgrove/jsmin-php)

## License

* [MIT License](http://opensource.org/licenses/mit-license.php)

## Copyright

* Copyright © 2013 Ny fågel <hej@nyfagel.se> ([CodeIgniter Spark](https://github.com/nyfagel/codeigniter-jsmin-php))
* Copyright © 2012 Adam Goforth <aag@adamgoforth.com> (Updates)
* Copyright © 2008 Ryan Grove <ryan@wonko.com> ([PHP port](https://github.com/rgrove/jsmin-php))
* Copyright © 2002 Douglas Crockford <douglas@crockford.com> ([jsmin.c](http://www.crockford.com/javascript/jsmin.html))
