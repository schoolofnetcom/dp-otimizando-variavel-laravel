<html>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-bottom: 24px;
        }

        ul {
            padding-left: none;
            list-style: none;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            height: 100vh;
            background-color: #e6e6e6;
        }
    </style>
    <body>
        <div class="container">
            <h1>Terceira view</h1>
            <ul>
                @foreach($users as $user)
                    <li>{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
