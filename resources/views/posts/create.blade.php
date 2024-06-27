<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <style>
        body {
            background-color: white;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            height: 200px;
            resize: vertical;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .save {
            background-color: #ff7f00;
            color: white;
        }
        .cancel {
            background-color: #777;
            color: white;
        }
        .delete {
            background-color: #ff4040;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create Blog</h2>
        <form action="/blog" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title*</label>
                <input type="text" id="title" name="title" value="" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" placeholder="Write your article here..." required> </textarea>
            </div>
            <div class="button-group">
                <button type="submit" class="save">Save changes</button>
                <button type="button" class="cancel">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>

</x-app-layout>

