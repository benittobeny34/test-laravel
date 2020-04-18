<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel = "stylesheet"/>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel = "stylesheet"
          href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    <link rel = "stylesheet" href = "{{asset('css/profileStyle.css')}}">

</head>
<body>
<form action = "profile" method = "post" id= "regForm" enctype="multipart/form-data">
    <div class="out-container">
       {{@csrf_field()}}
        <h2>Survey Form</h2>
        <div class = "in-container">
            <div class = "tab">
                <p>Let us know how we can improve</p>
                <table width = "95%">
                    <tr>
                        <td>*Name:</td>
                        <td><input id = 'name' name = "name" type = "text" class = "form-control"
                                   placeholder = "Enter your name"/></td>
                    </tr>
                    <tr>
                        <td>*Email:</td>
                        <td><input id = "email" name = "email" type = "email" class = "form-control"
                                   placeholder = "Enter your Email" title = "Enter valid email id"/></td>
                    </tr>
                    <tr>
                        <td>*Age:</td>
                        <td><input name = "age" id = "age" type = "number" class = "form-control" placeholder = "Enter your Age"
                                   title = "Enter age between 18 - 50"/></td>
                    </tr>
                    <tr>
                        <td>*Gender:</td>
                        <td>
                            <table>
                                <tr>
                                    <td style = "padding-left: 0px;">Male</td>
                                    <td><input name = "gender" value = "male" type = "radio"></td>
                                </tr>
                                <tr>
                                    <td>Female</td>
                                    <td><input name = "gender" value = "female" type = "radio"></td>
                                </tr>
                                <tr>
                                    <td>Others</td>
                                    <td><input name = "gender" value = "Others" type = "radio"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div class = "tab">
                <table width = "95%">
                    <tr>
                        <td>*What do you want to Become...?</td>
                        <td><select name = "role" style = "width:150px;" class = "form-control" required>
                                <option>PHP Developer</option>
                                <option>Web Developer</option>
                                <option>Java Developer</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>*Your Favourite Tv Show:</td>
                        <td><input id = "fshow" name = "fshow" type = "text" class = "form-control"
                                   placeholder = "which show  did you like most?(type...)"/></td>
                    </tr>
                    <tr>
                        <td>*Which Games did you like?</td>
                        <td><select style = "width:150px;" name = "fsport" class = "form-control" id = "like">
                                <option value = "">Choose</option>
                                <option value = "Cricket">Cricket</option>
                                <option value = "Football">Football</option>
                                <option value = "Volleyball">VolleyBall</option>
                                <option value = "Tennis">Tennis</option>
                            </select>
                    </tr>


                    <tr>
                        <td>Education Qualification(select if all that apply?)</td>
                        <td>
                            <select class = "multi" name = "degree[]" style = "width:200px;" class = "form-control"
                                    multiple="multiple" required title="please select atlease one filed">

                                <option value = "UG" disabled = "disabled">
                                    <bold>Primary</bold>
                                </option>
                                <option value = "1-5">1-5th</option>
                                <option value = "6-8">6-8th</option>

                                <option value = " disabled=" disabled>
                                    <bold>HSC</bold>
                                </option>
                                <option value = "9-10">9-10th</option>
                                <option value = "11-12">11-12th</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style = "padding-top:0px;">*Which of the following social media website do you currently have an account with?
                        </td>
                        <td>
                            <select class = "multi" name = "ss[]" style = "width:200px;" class = "form-control" id = "multiselect"
                                    multiple = "multiple" required title = "please select atlease one filed">
                                <option value = "Facebook">Facebook</option>
                                <option value = "Whatsapp">Whatsapp</option>
                                <option value = "Youtube">Youtube</option>
                                <option value = "LinkedIn">LinkedIn</option>
                                <option value = "GitHub">Github</option>
                                <option value = "Instagram">Instagram</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td>Select Image File to Upload</td>
                        <td><input type = "file" name = "fileToUpload" id = "fileToUpload"></td>
                    </tr>

                </table>
            </div>
            <div class = "tab">
                <p>Enter your 10th Mark Details</p>
                <table width = "95%">
                    <tr>
                        <td>Tamil
                        </td>
                        <td><input type = "number" name = "tamil" class = "form-control" placeholder = "?/100"></td>
                    </tr>
                    <td>English
                    </td>
                    <td><input type = "number" name = "english" class = "form-control" placeholder = "?/100"><td>
                    <tr>
                        <td>maths
                        </td>
                        <td><input type = "number" name = "maths" class = "form-control" placeholder = "?/100"></td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td><input type = "number" name = "science" class = "form-control" placeholder = "?/100"></td>
                    </tr>
                    <tr>
                        <td>Social Science
                        </td>
                        <td><input type = "number" name = "history" class = "form-control" placeholder = "?/100"></td>
                    </tr>
                </table>
            </div>
            <div class = "tab">
                <p>Enter your 12th Mark Details</p>
                <table width = "95%">
                    <tr>
                        <td>Primary language</td>
                        <td><input type = "number" name = "tamil_higher" class = "form-control" placeholder = "?/200"></td>
                    </tr>
                    <tr>
                        <td>Secondary Language</td>
                        <td><input type = "number" name = "english_higher" class = "form-control" placeholder = "?/200"></td>
                    </tr>
                    <tr>
                        <td>Maths</td>
                        <td><input type = "number" name = "maths_higher" class = "form-control" placeholder = "?/200"></td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td><input type = "number" name = "physics" class = "form-control" placeholder = "?/200"></td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td><input type = "number" name = "chemistry" class = "form-control" placeholder = "?/200"></td>
                    </tr>
                    <tr>
                        <td>Biology</td>
                        <td><input type = "number" name = "biology" class = "form-control" placeholder = "?/200"></td>
                    </tr>
                </table>
            </div>
            <div style = "overflow:auto;">
                <div style = "float:right;">
                    <button type = "button" id = "prevBtn" onclick = "nextPrev(-1)">Previous</button>
                    <button type = "button" id = "nextBtn" onclick = "nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style = "text-align:center;margin-top:40px;">
                <span class = "step"></span>
                <span class = "step"></span>
                <span class = "step"></span>
                <span class = "step"></span>
            </div>

        </div>

    </div>
</form>
 <script src = "{{asset('js/profile.js')}}"></script>
</body>

</html>