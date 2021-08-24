<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style type="text/css">
    td {
        border: 1px solid rgb(10, 109, 43);
        background-color: rgb(255, 255, 255);
        padding:10px;
    }

    thead {
        background-color: rgb(10, 109, 43);
        color: rgb(255, 255, 255);
    }

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="3">Calculator</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td><form><input type="radio" id="addition" name="addition"><label for="addition">+</label>
                    <input type="radio" id="subtraction" name="subtraction" ><label for="subtraction">-</label>
                    <input type="radio" id="multiplication" name="multiplication" ><label for="multiplication">*</label>
                    <input type="radio" id="division" name="division" ><label for="division">/</label><br><br>
                    <div><button type="submit">submit</button></div>
</form>
                </td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
