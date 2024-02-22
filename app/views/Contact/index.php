<html>
<head>
    <title>
        <?= $name ?> view
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <h3>Contact us</h3>
    <div id='container'>
        <p>Wanna reach us? Write your email information and message in the following form and then submit it.</p>
        <form method='post' action='/Contact/read'>
            <table border="0">
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" placeholder="jondoe@email.com" style="width: 550px" /></td>
                </tr>
                <tr>
                    <td><label>Message:</label></td>
                    <td><textarea name="message" style="width: 550px"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="action" value="Send!" style="width: 550px">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
