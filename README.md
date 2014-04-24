Javascript Object Literal Converter
===

JOL converts a data structure to a javascript object literal which looks similar to JSON. Though both are not the same.

The code base is derived from [JSON.php](http://pear.php.net/pepr/pepr-proposal-show.php?id=198).

Usage
-----

```
$string_with_quotes = "'quotes'";

$object = new \stdClass();
$object->string = '"String example with" ' . $string_with_quotes;
$object->boolean = true;
$object->integer = 42;
$object->array = array(1, 2, 3);
$object->object = new \stdClass();

$jol = new JOL();
$val = $jol->encode($object);

print_r($val);
```

The above code snippet should produce the following output.

```
{string:'\"String example with\" \'quotes\'',boolean:true,integer:42,array:[1,2,3],object:{}}
```

Javascript object literals can then safely be used in attributes of HTML elements as this example shows: `<html-element data-jol="{...}" />`

License
-------

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are
met:

Redistributions of source code must retain the above copyright notice,
this list of conditions and the following disclaimer.

Redistributions in binary form must reproduce the above copyright
notice, this list of conditions and the following disclaimer in the
documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN
NO EVENT SHALL CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF
USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.