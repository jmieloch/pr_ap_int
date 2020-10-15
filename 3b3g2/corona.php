<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./corona1.php" method="get">
    <table border>
 
    <tr>
    <th>Name</th> <th>Value</th>
    <tr>

    <tr>
    <td>Name</td> <td>
    <input type="text" name="name"></td>
    <tr>

    <tr>
    <td>Sex</td> 
    <td>
    <input type="radio" name="color" value="m">Male <br>
        <input type="radio" name="color" value="f">Female</td>
    <tr>

    <tr>
    <td>Eye color</td> <td>
    <form name="color" method="post">
<select name="test">
    <option value="r">red</option>
    <option value="g">green</option>
    <option value="b">blue</option>
</select>
    </td>
    <tr>

    <tr>
    <td>Check all that apply</td> <td>
    <input type="checkbox" name="check">Over 6 feet tall<br>
    <input type="checkbox" name="check">Over 200 pounds <br>
    </td>
    <tr>

    <tr>
    <td colspan="2"> Describe your athletic ability</td> 
    <tr>

    <tr>
    <td colspan="2">
    <textarea cols="45"> </textarea> </td> 
    <tr>

    <tr>
    <td colspan="2"><input type="submit" name="Wyslij dane"></td> 
    <tr>

    </table>
</form>
</body>
</html>