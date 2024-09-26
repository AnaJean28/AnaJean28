<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week Activity</title>
    <script>
        function showDay(day) {
            document.getElementById('display').innerText = day;
        }
    </script>
</head>
<body>
    <h2>Days of the Week Activity</h2>

    <button onclick="showDay('Monday')">Monday</button>
    <button onclick="showDay('Tuesday')">Tuesday</button>
    <button onclick="showDay('Wednesday')">Wednesday</button>
    <button onclick="showDay('Thursday')">Thursday</button>
    <button onclick="showDay('Friday')">Friday</button>

    <h3 id="display"></h3>
</body>
</html>
