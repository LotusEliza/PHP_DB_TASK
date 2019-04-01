<html>
<head>
	<title>%TITLE%</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div><h2>Contact Form</h2></div>
<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>

<!--value="--><?php //echo $firstname;?><!--"-->
 <h3>Contact Form</h3>

    <div class="container">
    <form method="POST" action="">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname"  placeholder='%NAME%'>
        <span class="error">%ERROR_NAME%</span>
        <br>
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">

        <label for="subject">Subject</label>
        <select id="subject" name="subject">
        <option value="" disabled selected>Select something...</option>
        <option value="subject1">Australia</option>
        <option value="subject2">Canada</option>
        <option value="subject3">USA</option>
        </select>

        <label for="comment">Comment</label>
        <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
    </div>

</body>
</html>
