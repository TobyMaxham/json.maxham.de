<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} - Maxham.de</title>
    <meta name="description" content="Fake online REST API for developers">
    <meta name="author" content="TobyMaxham">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/github.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
          rel="stylesheet">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
<header>
    <h1>
        {{--JSONPlaceholder--}}
        {{ env('APP_NAME') }}
    </h1>
    <p>
        Fake Online REST API for Testing and Prototyping
        <br>
        <small>
            {{--
            Powered by
            <a href="https://github.com/typicode/json-server">JSON Server</a>
            and
            <a href="https://github.com/typicode/lowdb">LowDB</a>
            --}}
        </small>
    </p>
</header>
{{--
<div class="see-also">
    <div class="narrow center">
        <h2>Sponsors</h2>
        <a href="https://www.youtube.com/channel/UC29ju8bIPH5as8OGnQzwJyA"
           target="_blank">
            <img src="https://i.imgur.com/2LDiENb.png" height="60px">
        </a>
    </div>
</div>
--}}
<div class="narrow">

    <h2>Intro</h2>
    <p>
        {{--JSONPlaceholder--}} This is a free online REST service that you can use whenever
        you need some fake data.
    </p>
    <p>
        It's great for tutorials, faking a server, sharing code examples, ...
    </p>
    <h2>Example</h2>
    <p>
        Run this code in a console or from anywhere.
        <br> HTTP and HTTPS are both supported.
    </p>
    <pre><code id="example" class="javascript">fetch('{{ env('APP_URL') }}/posts/1')
  .then(response => response.json())
  .then(json => console.log(json))
</code></pre>
    <p>
        <button id="run">Run</button>
    </p>
    <p id="result" class="json">// click the button above to make a request
        ;)</p>
    <h2>Resources</h2>
    <p>
        Inspired by common use cases.
    </p>
    <table>
        <tr>
            <td>
                <a href="/posts">/posts</a>
            </td>
            <td>100 items</td>
        </tr>
        <tr>
            <td>
                <a href="/comments">/comments</a>
            </td>
            <td>500 items</td>
        </tr>
        <tr>
            <td>
                <a href="/albums">/albums</a>
            </td>
            <td>100 items</td>
        </tr>
        <tr>
            <td>
                <a href="/photos">/photos</a>
            </td>
            <td>5000 items</td>
        </tr>
        <tr>
            <td>
                <a href="/todos">/todos</a>
            </td>
            <td>200 items</td>
        </tr>
        <tr>
            <td>
                <a href="/users">/users</a>
            </td>
            <td>10 items</td>
        </tr>
    </table>
    <h2>Routes</h2>
    <p>
        All HTTP verbs are supported.
        {{--<br> View usage
        <a href="https://github.com/typicode/jsonplaceholder#how-to">examples</a>.--}}
    </p>
    <table>
        <tr>
            <td class="verb">GET</td>
            <td>
                <a href="/posts">/posts</a>
            </td>
        </tr>
        <tr>
            <td class="verb">GET</td>
            <td>
                <a href="/posts/1">/posts/1</a>
            </td>
        </tr>
        <tr>
            <td class="verb">GET</td>
            <td>
                <a href="/posts/1/comments">/posts/1/comments</a>
            </td>
        </tr>
        <tr>
            <td class="verb">GET</td>
            <td>
                <a href="/comments?postId=1">/comments?postId=1</a>
            </td>
        </tr>
        <tr>
            <td class="verb">GET</td>
            <td>
                <a href="/posts?userId=1">/posts?userId=1</a>
            </td>
        </tr>
        <tr>
            <td class="verb">POST</td>
            <td>/posts</td>
        </tr>
        <tr>
            <td class="verb">PUT</td>
            <td>/posts/1</td>
        </tr>
        <tr>
            <td class="verb">PATCH</td>
            <td>/posts/1</td>
        </tr>
        <tr>
            <td class="verb">DELETE</td>
            <td>/posts/1</td>
        </tr>
        </tr>
    </table>
    {{--
    <h2>Use your OWN data</h2>
    <p>
        <a href="https://github.com/typicode/json-server">JSON Server</a> powers
        this website. You can use it to create the same fake API in less than
        <strong>30 seconds</strong> with your own data.
    </p>
    <pre><code class="bash">npm install -g json-server</code></pre>
    <p>Or you can try
        <a href="https://my-json-server.typicode.com">My JSON Server</a> free
        service.</p>
        --}}
</div>
<footer>
    <p>
        Coded and built with
        <i class="fa fa-heart"></i>
        by
        <a href="https://github.com/TobyMaxham">TobyMaxham</a>
        {{--
        Coded and built with
        <i class="fa fa-heart"></i>
        by
        <a href="https://github.com/typicode">typicode</a>
        <br>Source code available on
        <a href="https://github.com/typicode/jsonplaceholder">GitHub</a>
        <br>
        <a href="https://patreon.com/typicode"
           onclick="trackOutboundLink('https://patreon.com/typicode')"><b>Support
                this project on Patreon</b></a>
                --}}
    </p>
</footer>
<div class="more">
</div>


<script>
    // Google Analytics
</script>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fetch/2.0.3/fetch.min.js"></script>
<script>
    // Use http or https based on location.protocol
    var exampleText = $('#example').text()
    $('#example').text(exampleText.replace('http:', location.protocol))

    // Highlight result element
    $('#result').each(function (i, block) {
        hljs.highlightBlock(block);
    });

    // Run example
    $('#run').click(function () {
        //var root = location.protocol + '//{{ env('APP_URL') }}';
        var root = '{{ env('APP_URL') }}';
        $.ajax({
            url: root + '/posts/1',
            method: 'GET'
        }).then(function (data) {
            var str = JSON.stringify(data, null, '\t')
            $('#result').html(
                str.replace(/\n/g, '<br/>')
                    .replace(/\\n/g, ' ')
                    .replace(/\t/g, '&nbsp;&nbsp;')
            );

            $('#result').each(function (i, block) {
                hljs.highlightBlock(block);
            });
        });
    });
</script>
</body>
</html>
