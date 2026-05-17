<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { margin-bottom: 20px; }
        input[type="text"] { padding: 8px; width: 250px; }
        button { padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>تطبيق إدارة المهام - Task List</h2>

    <form action="/create" method="POST">
        @csrf
        <input type="text" name="name" placeholder="أدخل اسم المهمة الجديدة" required>
        <button type="submit">Add Task</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sample Task (Static)</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
