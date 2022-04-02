<!DOCTYPE html>
<html>
    <head>
        <title>Filme(s) | @yield("title")</title>
      
        @include("components/style")
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }
                
        </style>
    </head>

    <body>
        @include("components/navigation")
        <main>
            @yield("conteudo")
        </main>
        @include("components/footer")
        @include("components/javascript")
    </body> 
</html>