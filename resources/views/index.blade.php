<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            width: 90%;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin: 50px;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
        }

        .container p {
            font-size: xx-large;
            font-weight: bold;
        }

        button {
            padding: 5px 20px;
            font-size: 16px;
        }

        textarea {
            margin-top: 20px;
            width: 100%;
            padding: 15px;
            border: 2px solid #ccc;
            resize: none;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <p>G - Translate</p>

        <form action="{{ route('translate.get') }}" method="get">
            <input type="text" name="q" placeholder="Nhập nội dung cần dịch" value="{{ $q ?? ''}}"><br><br>
            <button type="submit">Dịch</button>
        </form>
        @if(isset($result) && $result != '')
        <textarea name="result" id="result" rows="15">{{ $result }}</textarea>
        @endif
    </div>

</body>

</html>