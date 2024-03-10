<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PemWeb </title>
</head>
<body>
    <?php
        $name = $email = $gender = $golonganDarah = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"] = " " ? "Nama Kosong" : $_POST["name"];
            $email = $_POST["email"] = " " ? "Email Kosong" : $_POST["email"];
            $gender = isset($_POST["gender"]) ? $_POST["gender"] : "Gender Kosong";
            $golonganDarah = isset($_POST["golonganDarah"]) ? $_POST["golonganDarah"] : "Golongan Darah Kosong";
        }
    ?>

    <form method="post" action="form[225150400111045].php">  
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Gender:
        <input type="radio" name="gender" value="perempuan">Perempuan
        <input type="radio" name="gender" value="laki-laki">Laki-laki
        <br><br>
        <label for="golonganDarah">Golongan Darah: </label>
            <select name="golonganDarah" id="golonganDarah">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="O">O</option>
                <option value="O">AB</option>
            </select>
            <br><br>
        <input type="submit" name="submit" value="Submit"> 
    </form>

    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $golonganDarah;
    ?>

</body>
</html>