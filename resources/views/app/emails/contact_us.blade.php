<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CONTACT REQUEST</title>
    <style type="text/css">
        body {
            background-color: #f6f6f6;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.4;
            color: #333333;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #dddddd;
        }

        h1,
        h2,
        h3 {
            margin-top: 0;
        }

        img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <h1>CONTACT REQUEST</h1>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('assets/imgs/icons/whipplogo.jpeg') }}" alt="Logo">
            </td>
        </tr>
        <tr>
            <td>
            {{-- @dd($name) --}}
                <h3>Client Information</h3>
                <ul>
                    <li>Name: {{$firstname}} {{$lastname}} </li>
                    <li>Email: {!! $email !!}</li>
                    <li>Phone: {!! $phone !!}</li>
                    <li>Website: {!! $website !!}</li>
                    <li>Company: {!! $company !!}</li>
                    <li>Services:
                        <ul style="list-style: decimal">
                            @foreach ($services as $service)
                            <li>    
                                {!! $service !!}
                                
                            </li>
                            @endforeach
                        </ul>
                   </li>
                    <li>Want Email List: {!! $wantemaillist !!}</li>
                    <li>Description: {!! $message_ !!} </li>
                </ul>
            </td>
    
        </tr>
    </table>
</body>

</html>
