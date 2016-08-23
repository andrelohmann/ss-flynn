<!DOCTYPE html>
<html>
    <head>
        <% base_tag %>
        <title>$Title</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        $MetaTags(false)


    </head>
    <body id="page-top">
        <div id="app">
            <nav id="top-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container"><!-- This container will center the Navbar Contents to the fluid width, by uncommenting it, the whole width will be used -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">HOME</a>
                    </div>

                    <div class="collapse navbar-collapse" id="top-navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <% if $URLPath != test/index %><li><a href="test/index">Test</a></li><% end_if %>
                        </ul>
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>

            $Layout
    </body>
</html>
