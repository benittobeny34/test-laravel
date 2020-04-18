



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="D:\Task-1\JAVA SCRIPT TUTORIALS\JAVA SCRIPT\jquery-3.4.1.js" type="text/javascript"></script>
    <script src="D:\Task-1\JAVA SCRIPT TUTORIALS\JAVA SCRIPT\jquery-ui-1.12.1\jquery-ui.js"></script>
    <link rel = "stylesheet" href = "{{asset('css/ProfileStyle.css')}}">
    <link rel = "stylesheet" href = "{{asset('css/profileshow.css')}}">

</head>

<body>


<div class = "row container  ">

    <table>
        <tr>
            <td class = "firstchild">
                <img id = "image"  src = "{{$data['image']}}">
                <button id = "edit" class = "btn">Edit profile</button>
                <input class = "file-upload" type = "file" accept = "image/*"/>

            </td>
            <td class = "secondchild">
                <div>
                    <table class = "details">
                        <tr>
                            <td> Name:</td>
                            <td>{{$data['name']}}</td>
                        </tr>
                        <tr>
                            <td> Role:</td>
                            <td>PHP Developer</td>
                        </tr>
                        <tr>
                            <td> Email:</td>
                            <td>{{$data['email']}}</td>
                        </tr>
                        <tr>
                            <td> Age:</td>
                            <td>{{$data['age']}}</td>
                        </tr>
                        <tr>
                            <td> Edu. Qualification:</td>
                            <td>{{$data['degree'][0]}}</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td class = "firstchild ">
                <div style = "align-content: center; font-size:larger; text-transform: uppercase;color: darkgreen">
                    10 Mark Percentage:{{$data['tenth_per']}}%<br>
                    12 Mark Percentage:{{$data['twelfth_per']}}%<br>
                    social media usage:{{$data['usage']}}%
                </div>
            </td>
            </td>
            <td class = "secondchild">
                <table>
                    <tr>
                        <td> Favourite Show:</td>
                        <td>{{$data['fshow']}}</td>
                    </tr>
                    <tr>
                        <td> Favourite sport:</td>
                        <td>{{$data['sport']}}</td>
                    </tr>

                    <tr>
                        <td>Social Media:</td>
                        <td>{{$data['susage'][0]}}</td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>


</div>
<a href="{{ url()->previous() }}"> <button style="border-radius: 10px; color: blue;">previous page</button></a>
</body>
<script>
    $(document).ready(function () {

        $("#image").mouseenter(function () {
            $("#edit").css("visibility", "visible");
            $("#edit").mouseenter(function () {
                $(this).css("visibility", "visible")
            })
            $("#image").mouseleave(function () {
                $("#edit").css("visibility", "hidden")
            })

        });


        var readURL = function (input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#edit").on('click', function () {
            $(".file-upload").click();
            $(".file-upload").on('change', function () {
                $("#edit").css("visibility", "hidden")
                readURL(this);
            });

        });
        //alert("Your details are stored");
    });
</script>
</html>
