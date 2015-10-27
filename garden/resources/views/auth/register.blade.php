<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 500px;
                display: table;
                font-weight: 100;
               
                font-size: bold;
                color:red;
                /*background-color: red;*/
            }

            .signup{
                background-color: orange;
            }


            
        </style>
    </head>
    <body>
        <div class="signup">
            <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

                <table>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="firstname" value="{{ old('firstname') }}"></td>
                        
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>
                            <input type="text" name="lastname" value="{{ old('lastname') }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="email" value="{{ old('email') }}">
                        </td>
                    </tr>
                    <tr>
                        <td> Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="password_confirmation"></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit">Register</button></td>

                </table>

    {{-- <div>
        First Name
        <input type="text" name="firstname" value="{{ old('firstname') }}">
    </div>
     <div>
        Last Name
        <input type="text" name="lastname" value="{{ old('lastname') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div> --}}
            </form>
        <div>
          
    </body>
</html>



