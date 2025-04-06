<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basicToAdvanced</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
   <div class=" flex flex-col items-center">
    <h1 class="text-2xl font-bold">Route example</h1>
    <a href="/user/1/smit" class="text-blue-900 font-bold underline">About User</a>
    <a href="{{ route('contact.me', ['id' => 3, 'slug' => 'smit']) }}" class="text-blue-900 font-bold underline">Contact Me</a>
    <a href="{{ route('example', ['id' => 3]) }}" class="text-blue-900 font-bold underline">Example</a>
    <a href="{{ route('blog.create')}}" class="text-blue-900 font-bold underline">Create a Blog</a>
    <a href="{{ route('blog.update')}}" class="text-blue-900 font-bold underline">Update the Blog</a>
   </div>

</body>
</html>