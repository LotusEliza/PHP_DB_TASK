<html>
<head>
	<title>%TITLE%</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div><h2>Contact Form</h2></div>

<div class="container">
<form method="POST" action="">
    <span class="error">%ERROR_NAME%</span>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="%NAME%" placeholder=''>

    <span class="error">%ERROR_EMAIL%</span>
    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="%EMAIL%" placeholder="Your email..">

    <span class="error">%ERROR_SUBJECT%</span>
    <label for="subject">Subject</label>
    <select id="subject" name="subject">
    <option value="" disabled selected>Select something...</option>
    <option value="subject1" %SUBJECT1%>Canada</option>%SUBJECT%
    <option value="subject2" %SUBJECT2%>USA</option>%SUBJECT%
    <option value="subject3" %SUBJECT3%>China</option>%SUBJECT%
    </select>
    <br>

    <span class="error">%ERROR_COMMENT%</span>
    <label for="comment">Comment</label>
    <textarea id="comment" name="comment" value="%COMMENT%" placeholder="Write something.." style="height:200px">%COMMENT%</textarea>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
</div>


</body>
</html>
